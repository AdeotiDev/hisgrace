<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GradingSystem extends Model
{
    protected $fillable = ['name', 'grading_system', 'branch_ids'];

    protected $casts = [
        'grading_system' => 'array',
        'branch_ids' => 'array',
    ];
}
