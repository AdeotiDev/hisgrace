<?php

namespace App\Filament\Resources\StudentiResource\Pages;

use App\Filament\Resources\StudentiResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditStudenti extends EditRecord
{
    protected static string $resource = StudentiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
