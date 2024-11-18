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
        Schema::create('psmt5s', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Student::class, 'student_id');
            $table->foreignIdFor(Classroom::class, 'classroom_id');
            $table->double('bpot')->nullable();
            $table->double('bmuslim')->nullable();
            $table->double('mabsaai')->unsigned()->nullable();
            $table->double('mma')->unsigned()->nullable();
            $table->double('mkdl')->unsigned()->nullable();
            $table->double('msfss')->unsigned()->nullable();
            $table->double('mtck')->unsigned()->nullable();
            $table->double('tmisd')->unsigned()->nullable();
            $table->double('mswss')->unsigned()->nullable();
            $table->double('cta')->unsigned()->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('psmt5s');
    }
};
