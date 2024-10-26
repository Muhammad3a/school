<?php

use App\Models\Subject;
use App\Models\PelajaranKejuruan;
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
        // Schema::create('cp_semesters', function (Blueprint $table) {
        //     $table->id();
        //     $table->foreignIdFor(Subject::class, 'subject_id');
        //     $table->foreignIdFor(PelajaranKejuruan::class, 'pelajarankejuruan_id');
        //     $table->text('sm1')->nullable();
        //     $table->text('sm2')->nullable();
        //     $table->text('sm3')->nullable();
        //     $table->text('sm4')->nullable();
        //     $table->text('sm5')->nullable();
        //     $table->text('sm6')->nullable();

        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cp_semesters');
    }
};
