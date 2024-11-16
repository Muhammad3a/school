<?php

use App\Models\Classroom;
use App\Models\Departement;
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
        Schema::table('students', function (Blueprint $table) {
            $table->string('nisn')->nullable()->after('nis');
            $table->string('tempatl')->nullable()->after('birthday');
            $table->enum('agama', ['Islam', 'Katolik', 'Protestan', 'Hindu', 'Buddha', 'Khonghucu'])->default('Islam')->after('tempatl');
            $table->enum('kwnegara', ['Warga Negara Indonesia', 'Kewarganegaraan Asing'])->default('Warga Negara Indonesia')->after('agama');
            $table->string('statusdk')->nullable()->after('kwnegara');
            $table->enum('anakke', ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10'])->default('1')->nullable()->after('statusdk');
            $table->text('alamat')->nullable()->after('anakke');
            $table->string('asekolah')->nullable()->after('contact');
            $table->foreignIdFor(Classroom::class, 'classroom_id')->after('asekolah')->nullable();
            $table->foreignIdFor(Departement::class, 'departement_id')->after('classroom_id')->default('1')->nullable();
            $table->string('nayah')->nullable()->after('departement_id');
            $table->string('nibu')->nullable()->after('nayah');
            $table->string('pkrjnayah')->nullable()->after('nibu');
            $table->string('pkrjnibu')->nullable()->after('pkrjnayah');
            $table->text('alamatot')->nullable()->after('pkrjnibu');
            $table->string('contactot')->nullable()->after('alamatot');
            $table->string('nwali')->nullable()->after('contactot');
            $table->string('pkrjnwali')->nullable()->after('nwali');
            $table->text('alamatwali')->nullable()->after('pkrjnwali');
            $table->string('contactw')->nullable()->after('alamatwali');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('students', function (Blueprint $table) {
            //
        });
    }
};
