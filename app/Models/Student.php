<?php

namespace App\Models;

use Illuminate\Support\Facades\Log;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Student extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function tandaTanganOrangTua()
    {
        return $this->hasOne(TandaTangan::class, 'siswa_id');
    }
    public function kelas(): BelongsTo
    {
        return $this->belongsTo(Kelas::class, 'classroom_id', 'id');
    }

    public function departements(): BelongsTo
    {
        return $this->belongsTo(Departement::class, 'departement_id', 'id');
    }

    public function smt1()
    {
        return $this->hasOne(Smt1::class, 'student_id');
    }
    public function usmt1()
    {
        return $this->hasOne(usmt1::class, 'student_id');
    }
    public function esmt1()
    {
        return $this->hasOne(esmt1::class, 'student_id');
    }
    public function kindustri()
    {
        return $this->hasOne(Kindustri::class, 'student_id', 'id');
    }
    public function pkl()
    {
        return $this->hasOne(Pkl::class, 'student_id', 'id');
    }
    public function ujikom()
    {
        return $this->hasOne(UjiKom::class, 'student_id', 'id');
    }
    public function dsmt1()
    {
        return $this->hasOne(dsmt1::class, 'student_id', 'id');
    }
    public function psmt1()
    {
        return $this->hasOne(psmt1::class, 'student_id', 'id');
    }
    public function smt2()
    {
        return $this->hasOne(smt2::class, 'student_id', 'id');
    }
    public function usmt2()
    {
        return $this->hasOne(usmt2::class, 'student_id', 'id');
    }
    public function esmt2()
    {
        return $this->hasOne(esmt2::class, 'student_id', 'id');
    }
    public function dsmt2()
    {
        return $this->hasOne(dsmt2::class, 'student_id', 'id');
    }
    public function psmt2()
    {
        return $this->hasOne(psmt2::class, 'student_id', 'id');
    }
    public function smt3()
    {
        return $this->hasOne(smt3::class, 'student_id', 'id');
    }
    public function usmt3()
    {
        return $this->hasOne(usmt3::class, 'student_id', 'id');
    }
    public function esmt3()
    {
        return $this->hasOne(esmt3::class, 'student_id', 'id');
    }
    public function dsmt3()
    {
        return $this->hasOne(dsmt3::class, 'student_id', 'id');
    }
    public function psmt3()
    {
        return $this->hasOne(psmt3::class, 'student_id', 'id');
    }
    public function smt4()
    {
        return $this->hasOne(smt4::class, 'student_id', 'id');
    }
    public function usmt4()
    {
        return $this->hasOne(usmt4::class, 'student_id', 'id');
    }
    public function esmt4()
    {
        return $this->hasOne(esmt4::class, 'student_id', 'id');
    }
    public function dsmt4()
    {
        return $this->hasOne(dsmt4::class, 'student_id', 'id');
    }
    public function psmt4()
    {
        return $this->hasOne(psmt4::class, 'student_id', 'id');
    }
    public function smt5()
    {
        return $this->hasOne(smt5::class, 'student_id', 'id');
    }
    public function usmt5()
    {
        return $this->hasOne(usmt5::class, 'student_id', 'id');
    }
    public function esmt5()
    {
        return $this->hasOne(esmt5::class, 'student_id', 'id');
    }
    public function dsmt5()
    {
        return $this->hasOne(dsmt5::class, 'student_id', 'id');
    }
    public function psmt5()
    {
        return $this->hasOne(psmt5::class, 'student_id', 'id');
    }
    public function smt6()
    {
        return $this->hasOne(smt6::class, 'student_id', 'id');
    }
    public function usmt6()
    {
        return $this->hasOne(usmt6::class, 'student_id', 'id');
    }
    public function esmt6()
    {
        return $this->hasOne(esmt6::class, 'student_id', 'id');
    }
    public function dsmt6()
    {
        return $this->hasOne(dsmt6::class, 'student_id', 'id');
    }
    public function psmt6()
    {
        return $this->hasOne(psmt6::class, 'student_id', 'id');
    }


    // Dalam model Student.php
    protected static function boot()
    {
        parent::boot();

        static::created(function ($record) {
            try {
                $email = strtolower($record->nis . '@gmail.com'); // Email berdasarkan NIS
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
                $user->assignRole('student');
            } catch (\Exception $e) {
                // Tangkap pesan error dan log-nya
                Log::error('Error saat membuat user: ' . $e->getMessage());
                throw $e;
            }
        });
    }

    public function getPredikat($nilai)
    {
        if ($nilai < 60) return 'Kurang';
        if ($nilai < 70) return 'Cukup';
        if ($nilai < 85) return 'Baik';
        return 'Sangat Baik';
    }

    public function getPredikatP($nilai)
    {
        if ($nilai >= 85) return 'Sangat Baik';
        if ($nilai >= 70) return 'Berkembang Sesuai Harapan';
        if ($nilai >= 60) return 'Mulai Berkembang';
        return 'Belum Berkembang';
    }

    public function getPredikatD($nilai)
    {
        $nilai = (int)$nilai; // Konversi eksplisit ke integer
        if ($nilai >= 85) return 'Sangat Baik';
        if ($nilai >= 70) return 'Berkembang Sesuai Harapan';
        if ($nilai >= 60) return 'Mulai Berkembang';
        return 'Belum Berkembang';
    }

    public function getPredikatA($nilai)
    {
        $nilai = (int)$nilai; // Konversi eksplisit ke integer
        if ($nilai >= 85) return 'Sangat Baik';
        if ($nilai >= 70) return 'Berkembang Sesuai Harapan';
        if ($nilai >= 60) return 'Mulai Berkembang';
        return 'Belum Berkembang';
    }
}
