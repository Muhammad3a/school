<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Student extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    function classrooms(): BelongsTo
    {
        return $this->belongsTo(ClassRoom::class, 'classrooms_id', 'id');
    }
    function Departements(): BelongsTo
    {
        return $this->belongsTo((Departement::class));
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
            // Membuat user secara otomatis setelah student dibuat
            $email = strtolower($record->nis . '@gmail.com'); // Email berdasarkan NIS
            $password = bcrypt('password123'); // Password default

            // Membuat User baru
            $user = User::create([
                'name' => $record->name,
                'email' => $email,
                'password' => $password,
            ]);

            // Menyimpan ID User ke student
            $record->user_id = $user->id;
            $record->save();

            // Menambahkan role default "student"
            $user->assignRole('student');
        });
    }
}
