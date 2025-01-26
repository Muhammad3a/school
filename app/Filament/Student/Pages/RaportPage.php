<?php

namespace App\Filament\Student\Pages;

use App\Models\Cps1;
use App\Models\smt1;
use App\Models\Student;
use App\Models\TandaTangan;
use Filament\Pages\Page;
use Barryvdh\DomPDF\Facade\Pdf;

class RaportPage extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    protected static string $view = 'filament.student.pages.raport-page';
    protected static ?string $navigationLabel = 'Raport Semester 1';

    public $student;
    public $cpSemesters;
    public $tandaTangan;

    public function mount(): void
    {
        // Mengambil data student berdasarkan user login
        $this->student = Student::where('user_id', auth()->id())
            ->with([
                'smt1',
                'usmt1',
                'esmt1',
                'Kindustri.jengke',
                'Pkl.jengke',
                'UjiKom.jengke',
                'dsmt1',
                'psmt1',
                'departements',
                'kelas'
            ])
            ->first();

        // Ambil data kompetensi semester
        $this->cpSemesters = Cps1::all();

        // Validasi jika data student tidak ditemukan
        if (!$this->student) {
            abort(404, 'Data student tidak ditemukan untuk user yang sedang login.');
        }

        // Ambil data tanda tangan
        $this->tandaTangan = $this->getTandaTangan();
    }

    public function getTandaTangan(): array
    {
        // Ambil data kelas dari smt3 berdasarkan student
        $kelas = smt1::where('student_id', $this->student->id)
            ->with('kelas') // Pastikan relasi kelas di-load
            ->latest('priode_id') // Mengambil data periode terbaru (semester terakhir)
            ->first()?->kelas;

        return [
            'wali_kelas' => $kelas
                ? TandaTangan::where('role', 'wali_kelas')->where('kelas_id', $kelas->id)->first()
                : null, // Jika tidak ditemukan, null
            'kepala_sekolah' => TandaTangan::where('role', 'kepala_sekolah')->first(),
        ];
    }

    public function cetakPDF()
    {
        // Data untuk PDF
        $data = [
            'student' => $this->student,
            'cpSemesters' => $this->cpSemesters,
            'tandaTangan' => $this->tandaTangan,
        ];

        // Render PDF
        $pdf = Pdf::loadView('filament.student.pages.raport-pdf', $data);

        // Unduh file
        return response()->streamDownload(
            fn() => print($pdf->output()),
            'Raport Semester 1.pdf'
        );
    }
}
