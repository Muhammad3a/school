<?php

use App\Models\Priode;
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
        Schema::table('dsmt1s', function (Blueprint $table) {
            $table->foreignIdFor(Priode::class, 'priode_id')->after('classroom_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('dsmt1s', function (Blueprint $table) {
            //
        });
    }
};
