<?php

namespace App\Http\Controllers;

use App\Models\Homework;
use Illuminate\Http\Request;

class HomeworkController extends Controller
{
    //
    public function download(Homework $homework)
{
    return $homework->download();
}

}
