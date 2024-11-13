<?php

namespace App\Models;

use App\Models\Subject;
use App\Models\Teacher;
use App\Models\SchoolClass;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Homework extends Model
{
    //


    protected $fillable = [
        'title',
        'description',
        'subject_id',
        'class_ids',
        'teacher_id',
        'due_date',
        'attachment',
        'branch_ids'
    ];


    protected $table = 'homeworks';

    protected $casts = [
        'due_date' => 'date', 
        'class_ids' => 'array',
        'branch_ids' => 'array'
    ];
    public function teacher()
    {
        return $this->belongsTo(User::class);
    }
   
    // In App\Models\Homework.php
    public function scopeForStudentClass($query, $studentClass)
    {
        return $query->whereJsonContains('class_ids', $studentClass);
    }


    // public function download()
    // {
    //     $filePath = $this->attachment; // File relative to storage/app/public
        
    //     Log::info('File path: ' . Storage::disk('public')->path($filePath));
        
    //     if ($this->attachment && Storage::disk('public')->exists($filePath)) {
    //         return response()->download(Storage::disk('public')->path($filePath));
    //     } else {
    //         Log::error('File not found: ' . $filePath);
    //         return response()->json([
    //             'error' => 'File not found.'
    //         ], 404);
    //     }
    // }

    public function download()
{
    $filePath = "{$this->attachment}"; // File relative to storage/app/public
    
    Log::info('File path: ' . Storage::disk('public')->path($filePath));
    
    if ($this->attachment && Storage::disk('public')->exists($filePath)) {
        // Optionally, you can generate a custom filename for the download.
        $customFileName = 'homework_' . $this->id . '_' . $this->title . '.pdf'; // Example filename

        // Return the file with the new name
        return response()->download(Storage::disk('public')->path($filePath), $customFileName);
    } else {
        Log::error('File not found: ' . $filePath);
        return response()->json([
            'error' => 'File not found.'
        ], 404);
    }
}

    


    public function class()
    {
        return $this->belongsTo(SchoolClass::class);
    }

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }
}
