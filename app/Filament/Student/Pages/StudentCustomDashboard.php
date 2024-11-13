<?php

namespace App\Filament\Student\Pages;

use App\Filament\Student\Widgets\StudentBadge;
use App\Filament\Student\Widgets\StudentNoticeboard;
use App\Filament\Student\Widgets\StudentNoticeboardB;
use Filament\Pages\Page;

class StudentCustomDashboard extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-home';
    protected static ?string $title = "";
    protected static ?string $navigationLabel = "Dashboard";

    protected static string $view = 'filament.student.pages.student-custom-dashboard';
    protected static ?string $slug = "dashboard";





    protected function getFooterWidgets(): array
    {
        return [
            StudentBadge::class,
            StudentNoticeboardB::class
        ];
    }
}
