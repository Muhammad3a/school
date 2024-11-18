<?php

use App\Models\Student;
use App\Models\Classroom;
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
        Schema::create('smt2s', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Student::class, 'student_id');
            $table->foreignIdFor(Classroom::class, 'classroom_id');
            $table->double('pai')->unsigned()->nullable();
            $table->double('pp')->unsigned()->nullable();
            $table->double('indo')->unsigned()->nullable();
            $table->double('pjok')->unsigned()->nullable();
            $table->double('sejarah')->unsigned()->nullable();
            $table->double('sb')->unsigned()->nullable();
            $table->double('sunda')->unsigned()->nullable();
            $table->double('arab')->unsigned()->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('smt2s');
    }
};
