<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Noticeboard extends Model
{
    //


    public function author(){
        return $this->belongsTo(User::class);
    }

    
    public function branch(){
        return $this->belongsTo(Branch::class);
    }



    protected $fillable = [
        'title',
        'description',
        'author_id',
        'visibility',
        'expiry_date',
        'branch_id',
        'attachment',
    ];

    // The attributes that should be cast to native types
    protected $casts = [
        'expiry_date' => 'date', // Cast expiry_date as a Carbon instance (date)
        'visibility' => 'array', // Visibility is a string but it represents an enum
        'attachment' => 'array',
    ];
    
    
}
