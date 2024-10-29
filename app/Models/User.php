<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Filament\Panel;
use App\Models\Branch;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\Attendance;
use App\Models\Noticeboard;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Filament\Models\Contracts\FilamentUser;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable  implements FilamentUser
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
 
    use HasFactory, Notifiable;


    public function canAccessPanel(Panel $panel): bool
    {
        if ($panel->getId() === 'admin') {
                
            if(auth()->user()->is_admin === true){
                return true;
            }else{
                return false;
            }
        }
 
        return true;
    }

    public function attendances()
    {
        return $this->hasMany(Attendance::class);
    }

    public function student()
    {
        return $this->hasOne(Student::class);
    }
    public function teacher()
    {
        return $this->hasOne(Teacher::class);
    }
    public function class()
    {
        return $this->belongsTo(SchoolClass::class, 'student_class');
    }

    public function noticeboard(){
        return $this->hasMany(Noticeboard::class);
    }

    public function branch()
    {
        return $this->belongsTo(Branch::class);
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    
    protected $fillable = [
        'name',               // Name of the user
        'email',              // Email of the user
        'email_verified_at',  // Timestamp when the user's email is verified
        'address',            // Address of the user
        'passport',           // Passport information (stored as JSON)
        'role_id',            // Foreign key for role
        'password',           // Password for the user
        'branch_id',          // Foreign key for branch
        'student_class',      // Class of the user
        'is_admin',           // Flag indicating if the user is an admin
    ];
    

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        ''
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
            'passport' => 'array',
            'is_admin' => 'boolean',
        ];
    }
}
