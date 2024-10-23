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
        Schema::table('subjects', function (Blueprint $table) {
            // Pastikan kolom belum ada sebelum menambahkannya
            if (!Schema::hasColumn('subjects', 'teachers_id')) {
                $table->unsignedBigInteger('teachers_id')->after('name'); // Tentukan lokasi kolom baru dengan after
                $table->foreign('teachers_id')
                    ->references('id')
                    ->on('teachers')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('subjects', function (Blueprint $table) {
            //
        });
    }
};
