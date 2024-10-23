<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeRoom extends Model
{
    use HasFactory;

    protected $guarded = [];

    function teachers()
    {
        return $this->belongsTo(Teacher::class, 'teachers_id', 'id');
    }
    public function classroom()
    {
        return $this->belongsTo(Classroom::class, 'classrooms_id', 'id');
    }
    public function homeroom()
    {
        return $this->belongsTo(HomeRoom::class, 'homerooms_id', 'id');
    }
    public function departement()
    {
        return $this->belongsTo(Classroom::class, 'departements_id', 'id');
    }
    function priode()
    {
        return $this->belongsTo(Priode::class, 'priode_id', 'id');
    }
}
