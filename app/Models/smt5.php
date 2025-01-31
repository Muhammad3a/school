<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class smt5 extends Model
{
    protected $guarded = [];

    public function student(): BelongsTo
    {
        return $this->belongsTo(Student::class);
    }
    public function classroom(): BelongsTo
    {
        return $this->belongsTo(Classroom::class);
    }
    public function priode(): BelongsTo
    {
        return $this->belongsTo(Priode::class, 'priode_id', 'id');
    }
    public function kelas(): BelongsTo
    {
        return $this->belongsTo(Kelas::class, 'classroom_id', 'id');
    }
}
