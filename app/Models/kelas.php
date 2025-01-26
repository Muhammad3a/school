<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Kelas extends Model
{
    protected $guarded = [];

    // Relasi ke model Student
    public function students(): HasMany
    {
        return $this->hasMany(Student::class, 'kelas_id');
    }

    // Relasi ke model TandaTangan
    public function tandaTangans(): HasMany
    {
        return $this->hasMany(TandaTangan::class, 'kelas_id');
    }
}
