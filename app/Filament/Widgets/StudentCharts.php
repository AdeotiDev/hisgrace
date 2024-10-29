<?php
namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;

class StudentCharts extends ChartWidget
{
    protected static ?string $heading = 'Students';

    protected function getData(): array
    {
        // Define dummy data for each month since January of the current year
        $months = [
            'January 2024', 
            'February 2024', 
            'March 2024', 
            'April 2024', 
            'May 2024', 
            'June 2024', 
            'July 2024', 
            'August 2024', 
            'September 2024', 
            'October 2024', 
            'November 2024', 
            'December 2024',
        ];

        // Generate dummy student counts for each month
        // You can adjust these numbers as needed
        $studentCounts = [
            10, // January
            15, // February
            20, // March
            25, // April
            30, // May
            35, // June
            40, // July
            45, // August
            50, // September
            55, // October
            60, // November
            65, // December
        ];

        return [
            'datasets' => [
                [
                    'label' => 'Number of Students',
                    'data' => $studentCounts, // Dummy counts for each month
                    'backgroundColor' => ['#3490dc'],
                ],
            ],
            'labels' => $months, // Month labels
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}

