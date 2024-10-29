<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    //

 
    protected $fillable = [
        'name',
        'branch_ids',
        'credits',
        'is_active'
    ];



    protected $casts = [
        'branch_ids' => 'array',
        'is_active' => 'boolean'
    ];
}
