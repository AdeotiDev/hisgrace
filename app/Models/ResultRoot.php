<?php

namespace App\Models;

use App\Models\ResultUpload;
use App\Models\GradingSystem;
use Illuminate\Database\Eloquent\Model;

class ResultRoot extends Model
{
    //



    protected $fillable = [
        'name',
        'description',
        'branch_ids',
        'exam_score_columns',
        'grading_system_id',
        'next_term',
    ];


    protected $casts = [
        'branch_ids' => 'array',
        'exam_score_columns' => 'array',
    ];



    public function resultUploads()
    {
        return $this->hasMany(ResultUpload::class, 'result_root_id');
    }



    public function gradingSystem()
    {
        return $this->belongsTo(GradingSystem::class);
    }
}
