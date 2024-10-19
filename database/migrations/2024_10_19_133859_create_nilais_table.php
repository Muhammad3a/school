<?php

use App\Models\CategoryNilai;
use App\Models\Classroom;
use App\Models\Priode;
use App\Models\Student;
use App\Models\Subject;
use App\Models\Teacher;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('nilais', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Classroom::class, 'class_id');
            $table->foreignIdFor(Student::class, 'student_id');
            $table->foreignIdFor(Priode::class, 'priode_id');
            $table->foreignIdFor(Teacher::class, 'teacher_id');
            $table->foreignIdFor(Subject::class, 'subject_id');
            $table->foreignIdFor(CategoryNilai::class, 'category_nilai_id');
            $table->double('nilai')->unsigned();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nilais');
    }
};
