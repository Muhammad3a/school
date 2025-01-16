<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Classroom extends Model
{
    use HasFactory;
    protected $guarded = [];

    // public function student(): BelongsTo
    // {
    //     return $this->belongsTo(Student::class);
    // }

    public function students()
    {
        return $this->hasMany(Student::class, 'classrooms_id', 'id');
    }
}
