<?php

namespace App\Filament\Resources\ResultRootResource\Pages;

use App\Filament\Resources\ResultRootResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListResultRoots extends ListRecords
{
    protected static string $resource = ResultRootResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
