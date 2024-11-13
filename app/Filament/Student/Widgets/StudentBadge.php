<?php

namespace App\Filament\Student\Widgets;

use App\Models\User;
use Filament\Widgets\Widget;
use Illuminate\Support\Facades\Auth;

class StudentBadge extends Widget
{
    protected static string $view = 'filament.student.widgets.student-badge';
    protected int | string | array $columnSpan = 'full';


    public function getStudent(): User
    {
        return Auth::user();  // Assuming the logged-in user is the student
    }
}
