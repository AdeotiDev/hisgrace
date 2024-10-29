<?php

namespace App\Filament\Resources\GradingSystemResource\Pages;

use App\Filament\Resources\GradingSystemResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditGradingSystem extends EditRecord
{
    protected static string $resource = GradingSystemResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
