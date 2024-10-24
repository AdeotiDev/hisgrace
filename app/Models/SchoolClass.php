<?php

namespace App\Models;

use App\Models\Homework;
use Illuminate\Database\Eloquent\Model;

class SchoolClass extends Model
{
    //

    protected $table = "classes";
    public function homeworks()
    {
        return $this->hasMany(Homework::class);
    }

    // App\Models\SchoolClass.php

    public function students()
    {
        return $this->hasMany(Student::class);
    }

   

    protected $fillable = [
        'name',
        'class_teacher_id',
        'branch_id',
        'capacity',
    ];

    // Relationships (optional, based on your setup)
    public function teacher()
    {
        return $this->belongsTo(Teacher::class, 'class_teacher_id');
    }

    public function branch()
    {
        return $this->belongsTo(Branch::class);
    }
}
