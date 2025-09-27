<?php

namespace App\Models;

use App\Models\User;
use App\Models\ResultRoot;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class ResultUpload extends Model
{
    public function resultRoot()
    {
        return $this->belongsTo(ResultRoot::class, 'result_root_id');
    }

    public function class()
    {
        return $this->belongsTo(SchoolClass::class, 'class_id');
    }

    protected $fillable = [
        'result_root_id',
        'file_path',
        'card_items',
        'subject_id',
        'class_id'
    ];

    protected $casts = [
        'card_items' => 'array',
        'file_path' => 'array'
    ];

    protected static function booted()
    {
        static::saved(function (ResultUpload $record) {
            Log::info("ResultUpload saved — triggering processCsvFile()", [
                'result_upload_id' => $record->id,
                'file_path' => $record->file_path,
            ]);
            $record->processCsvFile();
        });
    }

    public function processCsvFile()
    {
        if (!$this->file_path) {
            Log::warning("No file_path found for ResultUpload ID {$this->id}");
            return;
        }

        // Path to CSV
        $csvPath = Storage::disk('public')->path($this->file_path);
        Log::info("Processing CSV file for ResultUpload ID {$this->id}", [
            'csv_path' => $csvPath,
        ]);

        // Grading system
        $gradingSystem = ResultRoot::find($this->result_root_id)?->gradingSystem;
        if (!$gradingSystem) {
            Log::error("No grading system found", [
                'result_upload_id' => $this->id,
                'result_root_id' => $this->result_root_id,
            ]);
            return;
        }
        $gradingSystem = $gradingSystem->grading_system;
        Log::info("Loaded grading system", [
            'result_upload_id' => $this->id,
            'rules' => $gradingSystem,
        ]);

        $processedData = [];
        $totalScores = [];

        // Open CSV
        if (($handle = fopen($csvPath, 'r')) !== false) {
            $headers = fgetcsv($handle);
            Log::debug("CSV headers", [
                'result_upload_id' => $this->id,
                'headers' => $headers,
            ]);

            $rowCount = 0;
            while (($data = fgetcsv($handle)) !== false) {
                $rowCount++;
                $row = @array_combine($headers, $data);

                if (!$row || !isset($row['Student_ID'])) {
                    Log::error("Row {$rowCount} is malformed", [
                        'result_upload_id' => $this->id,
                        'row_data' => $data,
                    ]);
                    continue;
                }

                $studentId = $row['Student_ID'];
                unset($row['Student_ID']);

                $totalScore = array_sum(array_map('intval', $row));
                $totalScores[$studentId] = $totalScore;

                $gradingInfo = $this->getGradeFromScore($totalScore, $gradingSystem);

                $processedData[$studentId] = [
                    'scores' => $row,
                    'total' => $totalScore,
                    'grade' => $gradingInfo['grade'],
                    'remark' => $gradingInfo['remark'],
                    'average' => '',
                    'highest' => '',
                    'lowest' => '',
                    'position' => '',
                ];

                Log::debug("Processed student row", [
                    'result_upload_id' => $this->id,
                    'student_id' => $studentId,
                    'total_score' => $totalScore,
                    'grading' => $gradingInfo,
                ]);
            }
            fclose($handle);

            Log::info("Finished reading CSV", [
                'result_upload_id' => $this->id,
                'row_count' => $rowCount,
                'student_count' => count($processedData),
            ]);
        } else {
            Log::error("Could not open CSV file", [
                'result_upload_id' => $this->id,
                'csv_path' => $csvPath,
            ]);
            return;
        }

        // Scores summary
        $averageScore = $this->calculateAverage($totalScores);
        $highestScoreStudent = array_search(max($totalScores), $totalScores);

        $filteredScores = array_filter($totalScores, fn($score) => $score > 0);
        $lowestScoreStudent = $filteredScores
            ? array_search(min($filteredScores), $totalScores)
            : null;

        Log::info("Score summary", [
            'result_upload_id' => $this->id,
            'average' => $averageScore,
            'highest_student' => $highestScoreStudent,
            'lowest_student' => $lowestScoreStudent,
        ]);

        // Ranking
        arsort($totalScores);
        $rank = 1;
        $previousScore = null;
        $positionMapping = [];
        foreach ($totalScores as $studentId => $score) {
            if ($score !== $previousScore) {
                $positionMapping[$studentId] = $rank;
            } else {
                $positionMapping[$studentId] = $rank - 1;
            }
            $previousScore = $score;
            $rank++;
        }

        // Assign stats
        foreach ($processedData as $studentId => &$studentData) {
            $studentData['average'] = $averageScore;
            $studentData['highest'] = $processedData[$highestScoreStudent]['total'] ?? null;
            $studentData['lowest'] = $lowestScoreStudent
                ? ($processedData[$lowestScoreStudent]['total'] ?? null)
                : null;
            $studentData['position'] = $this->getPositionSuffix($positionMapping[$studentId]);
        }

        Log::debug("Final processed data", [
            'result_upload_id' => $this->id,
            'processed_data' => $processedData,
        ]);

        // Save quietly
        $this->card_items = json_encode($processedData, JSON_PRETTY_PRINT);
        $this->saveQuietly();

        Log::info("ResultUpload processed and saved successfully", [
            'result_upload_id' => $this->id,
        ]);
    }

    public function calculateAverage($totalScores)
    {
        $sum = array_sum($totalScores);
        $count = count($totalScores);
        return $count === 0 ? 0 : round($sum / $count, 2);
    }

    public function getGradeFromScore($score, $gradingSystem)
    {
        foreach ($gradingSystem as $gradeRule) {
            if ($score >= $gradeRule['min_score'] && $score <= $gradeRule['max_score']) {
                return [
                    'grade' => $gradeRule['grade'],
                    'remark' => $gradeRule['remark'],
                ];
            }
        }
        return ['grade' => 'F', 'remark' => 'Failed'];
    }

    public function getPositionSuffix($position)
    {
        $suffix = 'th';
        if (!in_array(($position % 100), [11, 12, 13])) {
            switch ($position % 10) {
                case 1: $suffix = 'st'; break;
                case 2: $suffix = 'nd'; break;
                case 3: $suffix = 'rd'; break;
            }
        }
        return $position . $suffix;
    }
}
