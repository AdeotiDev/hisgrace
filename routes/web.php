<?php

use App\Http\Controllers\HomeController;
use App\Models\SchoolClass;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/cls', function(){
//     $classes_arr = SchoolClass::whereJsonContains('branch_ids', '1')->pluck('name', 'id');

//     dd($classes_arr);
// });

Route::get('/home', [HomeController::class, 'index'])->name('home');
