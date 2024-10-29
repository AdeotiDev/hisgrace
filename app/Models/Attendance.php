<?php

namespace App\Models;

use App\Models\Student;
use App\Models\SchoolClass;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    //

    protected $fillable = ['student_id', 'class_id', 'attendance_date', 'status', 'branch_id','marked_by'];

    public function student()
    {
        return $this->belongsTo(User::class);
    }

    public function class()
    {
        return $this->belongsTo(SchoolClass::class);
    }
    public function branch()
    {
        return $this->belongsTo(Branch::class);
    }
}
