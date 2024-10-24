<?php

namespace App\Filament\Widgets;

use Filament\Support\Colors\Color;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class EduSoftStats extends BaseWidget
{
    
    protected function getStats(): array
    {
        $getSchoolStats = getSchoolStats();
        return [
            Stat::make('Total Students', $getSchoolStats['totalStudents'])
                ->description('Students in all the branches')
            ,
            Stat::make('Total Teachers', $getSchoolStats['totalTeachers'])
                ->description('Teachers in all the branches')
                ->descriptionColor('success')
            ,
            Stat::make('Total Classes', $getSchoolStats['totalClasses'])
                ->description('Classes in all the branches')
                ->descriptionColor('warning')
            ,
        ];
    }
}
