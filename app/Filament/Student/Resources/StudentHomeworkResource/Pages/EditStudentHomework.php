<?php

namespace App\Filament\Student\Resources\StudentHomeworkResource\Pages;

use App\Filament\Student\Resources\StudentHomeworkResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditStudentHomework extends EditRecord
{
    protected static string $resource = StudentHomeworkResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
