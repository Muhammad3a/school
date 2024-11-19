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
        Schema::create('ksmt4s', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Student::class, 'student_id');
            $table->foreignIdFor(Classroom::class, 'classroom_id');
            $table->double('bd')->unsigned()->nullable();
            $table->double('persisda')->unsigned()->nullable();
            $table->double('pw')->unsigned()->nullable();
            $table->double('ppb')->unsigned()->nullable();
            $table->double('pkk')->unsigned()->nullable();
            $table->double('kb')->unsigned()->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ksmt4');
    }
};
