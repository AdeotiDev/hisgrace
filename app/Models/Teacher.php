<?php

namespace App\Models;

use App\Models\Homework;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    //
    public function homeworks()
    {
        return $this->hasMany(Homework::class);
    }
}
