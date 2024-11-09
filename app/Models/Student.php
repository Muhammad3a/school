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
}
