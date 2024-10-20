<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Nilai extends Model
{
    protected $guarded = [];

    public function class(): BelongsTo
    {
        return $this->belongsTo(Classroom::class, 'class_id', 'id');
    }

    public function student(): BelongsTo
    {
        return $this->belongsTo(Student::class);
    }
    public function priode(): BelongsTo
    {
        return $this->belongsTo(Priode::class, 'priode_id', 'id');
    }
    public function subject(): BelongsTo
    {
        return $this->belongsTo(Subject::class);
    }
    public function category_nilai(): BelongsTo
    {
        return $this->belongsTo(CategoryNilai::class, 'category_nilai_id', 'id');
    }
}
