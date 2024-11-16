<?php

namespace App\Filament\Resources\ResultUploadResource\Pages;

use Filament\Actions;
use Filament\Actions\Action;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Contracts\Support\Htmlable;
use App\Filament\Resources\ResultUploadResource;

class CreateResultUpload extends CreateRecord
{
    protected static string $resource = ResultUploadResource::class;


    protected function getCreateFormAction(): Action
    {
        return Action::make('create')
            ->label('Upload Result')
            ->icon('heroicon-s-arrow-up-on-square')
            ->requiresConfirmation()
            ->submit('create')
            ->keyBindings(['mod+s']);
    }

    protected function getCreateAnotherFormAction(): Action
    {
        return Action::make('createAnother')
            ->label('Upload & Upload Another')
            ->icon('heroicon-s-arrow-path')
            ->action('createAnother')
            ->keyBindings(['mod+shift+s'])
            ->color('gray');
    }

    public function getTitle(): string | Htmlable
    {
        return 'Upload Result';
    }

    public function getBreadcrumb(): string
    {
        return 'upload';
    }

    protected function getCreatedNotification(): ?Notification
    {
        $title = "Result Uploaded Successfully!";

        if (blank($title)) {
            return null;
        }

        return Notification::make()
            ->success()
            ->title($title);
    }


}
