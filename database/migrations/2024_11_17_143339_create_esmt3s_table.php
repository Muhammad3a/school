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
        Schema::create('esmt3s', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Student::class, 'student_id');
            $table->foreignIdFor(Classroom::class, 'classroom_id');
            $table->double('pramuka')->nullable();
            $table->double('kesenian')->nullable();
            $table->double('pramadan')->unsigned()->nullable();
            $table->double('okesehatan')->unsigned()->nullable();
            $table->double('kmulia')->unsigned()->nullable();
            $table->double('bkerja')->unsigned()->nullable();
            $table->double('kewirausahaan')->unsigned()->nullable();
            $table->double('berekayasa')->unsigned()->nullable();
            $table->double('kebekerjaan')->unsigned()->nullable();
            $table->double('gim')->unsigned()->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('esmt3s');
    }
};
