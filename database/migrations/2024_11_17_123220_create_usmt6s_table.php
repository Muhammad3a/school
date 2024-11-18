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
        Schema::create('usmt6s', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Student::class, 'student_id');
            $table->foreignIdFor(Classroom::class, 'classroom_id');
            $table->double('mtk')->unsigned()->nullable();
            $table->double('inggris')->unsigned()->nullable();
            $table->double('informatika')->unsigned()->nullable();
            $table->double('fisika')->unsigned()->nullable();
            $table->double('kimia')->unsigned()->nullable();
            $table->double('bisnis')->unsigned()->nullable();
            $table->double('profesi')->unsigned()->nullable();
            $table->double('pemtur')->unsigned()->nullable();
            $table->double('pbo')->unsigned()->nullable();
            $table->double('gim')->unsigned()->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usmt6s');
    }
};
