<?php

namespace App\Filament\Resources\NoticeboardResource\Pages;

use App\Filament\Resources\NoticeboardResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditNoticeboard extends EditRecord
{
    protected static string $resource = NoticeboardResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
