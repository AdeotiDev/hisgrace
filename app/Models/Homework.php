<?php

namespace App\Models;

use App\Models\Subject;
use App\Models\Teacher;
use App\Models\SchoolClass;
use Illuminate\Database\Eloquent\Model;

class Homework extends Model
{
    //


    protected $fillable = [
        'title',
        'description',
        'subject_id',
        'class_id',
        'teacher_id',
        'due_date',
        'attachment',
        'branch_id'
    ];

    protected $table = 'homeworks';

    // The attributes that should be cast to native types
    protected $casts = [
        'due_date' => 'date', // Cast the due_date as a Carbon instance (date)
    ];
    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
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
