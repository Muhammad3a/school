<?php

use App\Models\jengke;
use App\Models\Student;
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
        Schema::create('pkls', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Student::class, 'student_id');
            $table->double('nilai')->unsigned()->nullable();
            $table->text('lokasi');
            $table->foreignIdFor(jengke::class, 'jengke_id');
            $table->string('lama');
            $table->string('waktu');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pkls');
    }
};
