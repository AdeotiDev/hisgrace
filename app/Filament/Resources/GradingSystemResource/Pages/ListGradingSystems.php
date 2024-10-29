<?php

namespace App\Filament\Resources\GradingSystemResource\Pages;

use App\Filament\Resources\GradingSystemResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListGradingSystems extends ListRecords
{
    protected static string $resource = GradingSystemResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
