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
   

    public function class()
    {
        return $this->belongsTo(SchoolClass::class);
    }

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }
}
