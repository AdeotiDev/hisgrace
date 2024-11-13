<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomeworkController;
use App\Models\SchoolClass;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/cls', function(){
//     $classes_arr = SchoolClass::whereJsonContains('branch_ids', '1')->pluck('name', 'id');

//     dd($classes_arr);
// });

Route::get('/', [HomeController::class, 'index'])->name('home')->middleware('auth');
// In routes/web.php
Route::get('/homework/{homework}/download', [HomeworkController::class, 'download'])->name('homework.download')->middleware('auth');


Route::get('/symlink', function(){
    if(function_exists('symlink')) {
        echo "symlink() is enabled.";
    } else {
        echo "symlink() is NOT enabled.";
    }
});
