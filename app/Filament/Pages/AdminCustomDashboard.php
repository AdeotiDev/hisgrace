<?php

namespace App\Filament\Pages;

use App\Filament\Widgets\EduSoftStats;
use Filament\Pages\Page;

class AdminCustomDashboard extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-home';

    protected static string $view = 'filament.pages.admin-custom-dashboard';
    protected static ?string $title = '';
    protected static ?string $navigationLabel = 'Dashboard';
    protected static ?string $slug = "/";



    protected function getFooterWidgets(): array
    {
        return [
            EduSoftStats::class,
        ];
    }



}
