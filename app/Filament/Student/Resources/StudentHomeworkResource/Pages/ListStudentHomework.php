<?php

namespace App\Filament\Student\Resources\StudentHomeworkResource\Pages;

use App\Filament\Student\Resources\StudentHomeworkResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListStudentHomework extends ListRecords
{
    protected static string $resource = StudentHomeworkResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
