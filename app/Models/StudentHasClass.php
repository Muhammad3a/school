<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentHasClass extends Model
{
    use HasFactory;

    protected $guarded = [];

    function students()
    {
        return $this->belongsTo(Student::class);
    }

    function classrooms()
    {
        return $this->belongsTo(ClassRoom::class, 'classrooms_id', 'id');
    }
    function Priode()
    {
        return $this->belongsTo((Priode::class));
    }
}
