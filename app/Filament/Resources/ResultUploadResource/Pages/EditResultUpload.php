<?php

namespace App\Filament\Resources\ResultUploadResource\Pages;

use App\Filament\Resources\ResultUploadResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditResultUpload extends EditRecord
{
    protected static string $resource = ResultUploadResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
