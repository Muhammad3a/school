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
        Schema::create('dsmt6s', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Student::class, 'student_id');
            $table->foreignIdFor(Classroom::class, 'classroom_id');
            $table->double('dwaktu')->nullable();
            $table->double('dibadah')->nullable();
            $table->double('dbelajar')->unsigned()->nullable();
            $table->double('dbergaul')->unsigned()->nullable();
            $table->double('dberbusana')->unsigned()->nullable();
            $table->double('dmenggunakanfasilitas')->unsigned()->nullable();
            $table->double('dk3')->unsigned()->nullable();
            $table->double('dberbahasa')->unsigned()->nullable();
            $table->double('dbertindak')->unsigned()->nullable();
            $table->double('dkeamanan')->unsigned()->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dsmt6s');
    }
};
