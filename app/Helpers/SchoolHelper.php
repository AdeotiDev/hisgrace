<?php

use App\Models\SchoolClass;
use App\Models\Setting;
use App\Models\Student;
use App\Models\Teacher;

if (!function_exists('getSchoolDetails')) {
    function getSchoolDetails()
    {
        // $school = Setting::firstOrFail();

        return [
            'school_name' => "",//$school->school_name,
            'school_address' => "",// $school->address,
            'school_phone' => "", //$school->contact,
            'school_logo' => ""//$school->logo,
        ];
    }




    if(!function_exists('getSchoolStats')){

        function getSchoolStats(){

            $totalStudents = 3;//Student::count();
            $totalTeachers = 3;//Teacher::count();
            $totalClasses =  3;//SchoolClass::count();


            return [
                'totalStudents' => number_format($totalStudents),
                'totalTeachers' => number_format($totalTeachers),
                'totalClasses' => number_format($totalClasses)
            ];
        }

    }
}
