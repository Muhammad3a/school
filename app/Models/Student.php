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
    public function karakters1()
    {
        return $this->hasOne(karakters1::class, 'student_id', 'id');
    }
}
