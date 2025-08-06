<?php

use App\Models\SchoolClass;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomeworkController;
use App\Http\Controllers\ReportCardPdfController;
use App\Http\Controllers\ResultController;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/cls', function(){
//     $classes_arr = SchoolClass::whereJsonContains('branch_ids', '1')->pluck('name', 'id');

//     dd($classes_arr);
// });

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home2', [HomeController::class, 'home2'])->name('home2');
// In routes/web.php
Route::get('/homework/{homework}/download', [HomeworkController::class, 'download'])->name('homework.download');

Route::get('/download-report-cards/{recordId}', [ReportCardPdfController::class, 'downloadReportCards'])
    ->name('download-report-cards');

Route::get('/symlink', function () {
    if (function_exists('symlink')) {
        echo "symlink() is enabled.";
    } else {
        echo "symlink() is NOT enabled.";
    }
});

Route::get('/download-result/{recordId}', [ResultController::class, 'downloadResult'])->name('download.result');
