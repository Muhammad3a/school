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
        Schema::table('esmt4s', function (Blueprint $table) {
            $table->double('sakit')->nullable()->after('gim');
            $table->double('izin')->nullable()->after('sakit');
            $table->double('alfa')->nullable()->after('izin');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('esmt4', function (Blueprint $table) {
            //
        });
    }
};
