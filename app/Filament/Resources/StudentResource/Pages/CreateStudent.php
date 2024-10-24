<?php

namespace App\Filament\Resources\StudentResource\Pages;

use App\Filament\Resources\StudentResource;
use App\Models\User;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\Hash;

class CreateStudent extends CreateRecord
{
    protected static string $resource = StudentResource::class;

    // protected function mutateFormDataBeforeCreate(array $data): array
    // {
    //     // Create a new User
    //     $user = User::create([
    //         'name' => $data['name'],
    //         'email' => $data['email'],
    //         'password' => Hash::make($data['password']),
    //         'address' => $data['address'] ?? null,
    //         'passport' => $data['passport'] ?? null,
    //         'branch_id' => $data['branch_id'],
    //     ]);

    //     // Add the user's ID to the student data
    //     $data['user_id'] = $user->id;

    //     // Unset user-specific data from the form data to avoid conflicts with the Student table
    //     unset($data['name'], $data['email'], $data['password'], $data['address'], $data['passport'], $data['branch_id']);

    //     return $data;
    // }

    protected function mutateFormDataBeforeCreate(array $data): array
{
    // Check if 'user' key exists in the data array
    if (!isset($data['user'])) {
        throw new \Exception("User data is missing");
    }

    // Create a new User
    $user = User::create([
        'name' => $data['user']['name'], // Access 'name' correctly
        'email' => $data['user']['email'], // Access 'email' correctly
        'password' => Hash::make($data['password']),
        'address' => $data['user']['address'] ?? null,
        'passport' => $data['user']['passport'] ?? null,
        'branch_id' => $data['branch_id'], // Ensure branch_id is directly in $data
    ]);

    // Add the user's ID to the student data
    $data['user_id'] = $user->id;

    // Unset user-specific data from the form data to avoid conflicts with the Student table
    unset($data['user'], $data['branch_id']); // Adjusted to unset 'user' array

    return $data;
}

}
