<?php

namespace App\Console\Commands;

use App\Models\Student;
use App\Models\ArchivedStudent;
use Illuminate\Console\Command;

class ArchiveGraduatedStudents extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:archive-graduated-students';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // Cari siswa yang telah lulus (3 tahun/6 semester)
        $students = Student::where('status', 'aktif')
            ->where('graduation_date', '<=', now()->subYears(3))
            ->get();

        foreach ($students as $student) {
            // Pindahkan ke tabel arsip
            ArchivedStudent::create($student->toArray());
            // Hapus data dari tabel asli
            $student->delete();
        }

        $this->info('Siswa yang lulus telah diarsipkan.');
    }
}
