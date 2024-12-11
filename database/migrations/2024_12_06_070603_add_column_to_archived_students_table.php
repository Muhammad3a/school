<?php

use App\Models\Classroom;
use App\Models\Departement;
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
        Schema::table('archived_students', function (Blueprint $table) {
            $table->string('nis')->nullable();
            $table->string('name');
            $table->enum('gender', ['Male', 'Female'])->default('Male');
            $table->date('birthday')->nullable();
            // $table->string('contact')->nullable();
            $table->string('profile')->nullable();
            $table->string('email')->nullable();
            $table->string('nisn')->nullable()->after('nis');
            $table->string('tempatl')->nullable()->after('birthday');
            $table->enum('agama', ['Islam', 'Katolik', 'Protestan', 'Hindu', 'Buddha', 'Khonghucu'])->default('Islam')->after('tempatl');
            $table->enum('kwnegara', ['Warga Negara Indonesia', 'Kewarganegaraan Asing'])->default('Warga Negara Indonesia')->after('agama');
            $table->string('statusdk')->nullable()->after('kwnegara');
            $table->enum('anakke', ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10'])->default('1')->nullable()->after('statusdk');
            $table->text('alamat')->nullable()->after('anakke');
            $table->string('contact')->nullable();
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
            $table->enum('status', ['aktif', 'off', 'pindah', 'arsip'])->default('aktif')->after('profile');
            $table->date('graduation_date')->nullable()->after('profile');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('archived_students', function (Blueprint $table) {
            //
        });
    }
};
