<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
    // App\Models\Student.php

    protected $fillable = [
        'user_id',
        'parent_contact',
        'roll_number',
        'guardian_name',
        'guardian_phone',
        'admission_date',
    ];
public function user()
{
    return $this->belongsTo(User::class);
}

// In Student.php Model
public function class() {
    return $this->belongsTo(SchoolClass::class, 'school_class_id');
}
public function branch() {
    return $this->belongsTo(Branch::class, 'school_class_id');
}


}
