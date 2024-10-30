<?php

use App\Models\SchoolClass;
use App\Models\Setting;
use App\Models\Student;
use App\Models\Teacher;

if (!function_exists('getSchoolDetails')) {
    function getSchoolDetails()
    {
        $school = '';//Setting::firstOrFail();

        return [
            'school_name' => '0',//$school->school_name,
            'school_address' => '0',//$school->address,
            'school_phone' => '0',//$school->contact,
            'school_logo' => '0',//$school->logo,
        ];
    }




    if(!function_exists('getSchoolStats')){

        function getSchoolStats(){

            $totalStudents = '0';//Student::count();
            $totalTeachers = '0';//Teacher::count();
            $totalClasses =  '0';//SchoolClass::count();


            return [
                'totalStudents' => '0',//number_format($totalStudents),
                'totalTeachers' => '0',//number_format($totalTeachers),
                'totalClasses' => '0',//number_format($totalClasses)
            ];
        }

    }
}
