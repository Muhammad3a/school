<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Kindustri extends Model
{
    protected $guarded = [];

    public function student(): BelongsTo
    {
        return $this->belongsTo(Student::class, 'student_id', 'id');
    }

    public function jengke(): BelongsTo
    {
        return $this->belongsTo(jengke::class);
    }
}
