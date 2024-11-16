<?php

namespace App\Filament\Resources\ResultRootResource\Pages;

use App\Filament\Resources\ResultRootResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditResultRoot extends EditRecord
{
    protected static string $resource = ResultRootResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
