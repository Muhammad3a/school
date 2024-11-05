<?php

use App\Models\jengke;
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
        Schema::create('kindustris', function (Blueprint $table) {
            $table->id();
            $table->string('mitra');
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
        Schema::dropIfExists('kindustris');
    }
};
