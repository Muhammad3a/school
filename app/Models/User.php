<?php

namespace App\Models;

use Filament\Panel;
use Illuminate\Support\Facades\Log;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Filament\Models\Contracts\FilamentUser;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements FilamentUser
{
    use HasFactory, Notifiable, HasRoles;

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function canAccessFilament(): bool
    {
        Log::info('User roles in canAccessFilament:', $this->getRoleNames()->toArray());
        return $this->hasRole(['admin', 'guru', 'wali kelas', 'student']);
    }

    public function canAccessPanel(Panel $panel): bool
    {
        $roles = $this->getRoleNames();

        return match ($panel->getId()) {
            'admin' => $roles->intersect(['admin', 'wali kelas'])->isNotEmpty(),
            'student' => $roles->contains('student'),
            default => false,
        };
    }
}
