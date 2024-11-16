<?php

namespace App\Filament\Student\Resources\ResultUploadResource\Pages;

use App\Filament\Student\Resources\ResultUploadResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListResultUploads extends ListRecords
{
    protected static string $resource = ResultUploadResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
