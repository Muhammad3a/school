<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('student_has_classes', function (Blueprint $table) {
            $table->unsignedBigInteger('classrooms_id')->after('students_id');

            // $table->foreign('classrooms_id')->references('id')->on('classrooms')->onUpdate('cascade')->onDelete('cascade');

            $table->foreign('classrooms_id')->references('id')->on('classrooms')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('student_has_classes', function (Blueprint $table) {
            //
        });
    }
};
