<?php

namespace App\Filament\Resources\StudentResource\Pages;

use App\Models\User;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;
use Filament\Resources\Pages\EditRecord;
use App\Filament\Resources\StudentResource;

class EditStudent extends EditRecord
{
    protected static string $resource = StudentResource::class;

    protected function mutateFormDataBeforeSave(array $data): array
    {
        Log::info('Form Data:', $data);
        // Fetch the current student record
        $student = $this->record;

        // Fetch the associated user based on user_id in the student record
        $user = User::find($student->user_id);

        // Only update the user data if it exists
        if ($user) {
            $user->update([
                'name' => $data['user']['name'],
                //'email' => $data['user']['email'],
                // Hash the password only if a new one is provided
                'password' => !empty($data['user']['password']) ? Hash::make($data['user']['password']) : $user->password,
                'address' => $data['user']['address'] ?? null,
                'passport' => $data['user']['passport'] ?? null,
            ]);
        }

        // Remove user-specific fields from the data to avoid conflicts with the Student model
        unset($data['user']);

        return $data;
    }
}
