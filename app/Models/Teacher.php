<?php

namespace App\Models;

use App\Models\Homework;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    //

   

    protected $fillable = [
        'qualification',
        'class_ids',
        'subject_ids',
        'user_id'
    ];

    protected $casts = [
        'class_ids' => 'array',
        'subject_ids' => 'array',
    ];

    public function homeworks()
    {
        return $this->hasMany(Homework::class);
    }
    public function subjects()
    {
        return $this->hasMany(Subject::class);
    }
    public function classes()
    {
        return $this->hasMany(SchoolClass::class,'class_teacher_id');
    }
}
