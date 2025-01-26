<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Log;


class Teacher extends Model
{
    use HasFactory;
    protected $guarded = [];

    function classroom()
    {
        return $this->hasMany(HomeRoom::class, 'teachers_id', 'id');
    }
    function tandatangan()
    {
        return $this->hasMany(TandaTangan::class, 'id');
    }

    protected static function boot()
    {
        parent::boot();

        static::created(function ($record) {
            try {
                $email = strtolower($record->nip . '@gmail.com'); // Email berdasarkan NIP
                $password = bcrypt('password123'); // Password default

                // Cek apakah email sudah ada
                if (User::where('email', $email)->exists()) {
                    throw new \Exception('Data sudah ada. Email tersebut sudah terdaftar.');
                }

                // Buat User baru
                $user = User::create([
                    'name' => $record->name,
                    'email' => $email,
                    'password' => $password,
                ]);

                // Simpan ID User ke student
                $record->user_id = $user->id;
                $record->save();

                // Tambahkan role default "student"
                $user->assignRole('wali kelas');
            } catch (\Exception $e) {
                // Tangkap pesan error dan log-nya
                Log::error('Error saat membuat user: ' . $e->getMessage());
                throw $e;
            }
        });
    }
}
