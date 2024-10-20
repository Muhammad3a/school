<?php

namespace App\Models;

use Filament\Panel;
use Illuminate\Notifications\Notifiable;
use Illuminate\Container\Attributes\Auth;
use Filament\Models\Contracts\FilamentUser;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;

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

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function canAccessFilament(): bool
    {
        return $this->hasRole(['admin', 'guru', 'wali kelas', 'student']);
    }

    public function canAccessPanel(Panel $panel): bool
    {
        $user = auth()->user();  // Menggunakan helper auth()
        $roles = $user->getRoleNames();

        if ($panel->getId() === 'admin' && $roles->intersect(['admin', 'wali kelas', 'guru'])->isNotEmpty()) {
            return true;
        } else if ($panel->getId() === 'student' && $roles->contains('student')) {
            return true;
        } else {
            return false;
        }
    }
}
