<?php

namespace App\Filament\Resources\NoticeboardResource\Pages;

use App\Filament\Resources\NoticeboardResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListNoticeboards extends ListRecords
{
    protected static string $resource = NoticeboardResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
