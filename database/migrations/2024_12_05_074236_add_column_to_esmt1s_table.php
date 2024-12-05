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
        Schema::table('esmt1s', function (Blueprint $table) {
            $table->double('foto')->nullable()->after('gim');
            $table->double('video')->nullable()->after('gim');
            $table->double('desain')->nullable()->after('gim');
            $table->double('kaligerafi')->nullable()->after('gim');
            $table->double('engclub')->nullable()->after('gim');
            $table->double('hadroh')->nullable()->after('gim');
            $table->double('voli')->nullable()->after('gim');
            $table->double('futsal')->nullable()->after('gim');
            $table->double('silat')->nullable()->after('gim');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('esmt1s', function (Blueprint $table) {
            //
        });
    }
};
