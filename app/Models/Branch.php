<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    //

    protected $fillable = [
        'name',
        'slug',
        'address'
    ];

    public function students()
    {
        return $this->hasMany(Student::class);
    }
}
