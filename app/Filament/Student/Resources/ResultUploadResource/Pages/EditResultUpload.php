<?php

namespace App\Filament\Student\Resources\ResultUploadResource\Pages;

use App\Filament\Student\Resources\ResultUploadResource;
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
