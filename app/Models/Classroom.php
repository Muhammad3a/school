<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Classroom extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function subjects()
    {
        return $this->belongsToMany(Subject::class)->withPivot('description');
    }

    public function students(): BelongsToMany
    {
        return $this->belongsToMany(Student::class, 'student_has_classes', 'classrooms_id', 'students_id');
    }
}
