<?php

namespace App\Filament\Student\Pages;

use App\Models\cps2;
use App\Models\smt1;
use App\Models\Student;
use App\Models\TandaTangan;
use Filament\Pages\Page;
use Barryvdh\DomPDF\Facade\Pdf;

class RaportPage2 extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.student.pages.raport-page2';

    protected static ?string $navigationLabel = 'Raport Semester 2';

    public $student; // Properti student didefinisikan
    public $cpSemesters;
    public $tandaTangan;

    public function mount()
    {
        // Ambil data student berdasarkan user yang login
        $this->student = Student::where('user_id', auth()->id())
            ->with([
                'smt2',
                'usmt2',
                'esmt2',
                'Kindustri.jengke',
                'Pkl.jengke',
                'UjiKom.jengke',
                'dsmt2',
                'psmt2',
                'departements',
                'kelas'
            ]) // Muat data smt1
            ->first();

        $this->cpSemesters = cps2::all();

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
        $pdf = Pdf::loadView('filament.student.pages.raport-pdf2', $data);

        // Unduh file
        return response()->streamDownload(
            fn() => print($pdf->output()),
            'Raport Semester 2.pdf'
        );
    }
}
