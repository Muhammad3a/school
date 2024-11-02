<?php

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
        Schema::table('kindustris', function (Blueprint $table) {
            $table->foreignIdFor(Student::class, 'student_id')->after('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('kindustri', function (Blueprint $table) {
            //
        });
    }
};
