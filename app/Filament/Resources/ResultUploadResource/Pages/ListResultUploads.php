<?php

namespace App\Filament\Resources\ResultUploadResource\Pages;

use App\Filament\Resources\ResultUploadResource;
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
