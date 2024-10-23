<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CpSemester extends Model
{
    protected $fillable = ['subject_id', 'pelajarankejuruan_id', 'sm1', 'sm2', 'sm3', 'sm4', 'sm5', 'sm6'];

    // Relasi ke model Subject
    public function subject()
    {
        return $this->belongsTo(Subject::class, 'subject_id');
    }

    // Relasi ke model PelajaranKejuruan
    public function pelajarankejuruan()
    {
        return $this->belongsTo(PelajaranKejuruan::class, 'pelajarankejuruan_id');
    }
}
