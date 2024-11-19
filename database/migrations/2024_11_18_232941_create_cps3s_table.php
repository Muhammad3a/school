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
        Schema::create('cps3s', function (Blueprint $table) {
            $table->id();
            $table->text('pai')->nullable();
            $table->text('pp')->nullable();
            $table->text('indo')->nullable();
            $table->text('pjok')->nullable();
            $table->text('sejarah')->nullable();
            $table->text('sb')->nullable();
            $table->text('sunda')->nullable();
            $table->text('arab')->nullable();
            $table->text('mtk')->nullable();
            $table->text('inggris')->nullable();
            $table->text('informatika')->nullable();
            $table->text('fisika')->nullable();
            $table->text('kimia')->nullable();
            $table->text('bisnis')->nullable();
            $table->text('profesi')->nullable();
            $table->text('pemtur')->nullable();
            $table->text('pbo')->nullable();
            $table->text('gim')->nullable();
            $table->text('bd')->nullable();
            $table->text('pbt')->nullable();
            $table->text('pw')->nullable();
            $table->text('ppb')->nullable();
            $table->text('pkk')->nullable();
            $table->text('kb')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cps3s');
    }
};
