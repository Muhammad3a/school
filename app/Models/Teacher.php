<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Teacher extends Model
{
    use HasFactory;
    protected $guarded = [];

    function classroom()
    {
        return $this->hasMany(HomeRoom::class, 'teachers_id', 'id');
    }
}
