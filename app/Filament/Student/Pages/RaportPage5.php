<?php

namespace App\Filament\Student\Pages;


use App\Models\cps5;
use App\Models\smt5;
use App\Models\Student;
use App\Models\TandaTangan;
use Filament\Pages\Page;
use Barryvdh\DomPDF\Facade\Pdf;

class RaportPage5 extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.student.pages.raport-page5';

    protected static ?string $navigationLabel = 'Raport Semester 5';

    public $student; // Properti student didefinisikan
    public $cpSemesters;
    public $tandaTangan;

    public function mount()
    {
        // Ambil data student berdasarkan user yang login
        $this->student = Student::where('user_id', auth()->id())
            ->with([
                'smt5',
                'usmt5',
                'esmt5',
                'Kindustri.jengke',
                'Pkl.jengke',
                'UjiKom.jengke',
                'dsmt5',
                'psmt5',
                'departements',
                'kelas'
            ]) // Muat data smt1
            ->first();

        $this->cpSemesters = cps5::all();

        if (!$this->student) {
            abort(505, 'Data student tidak ditemukan untuk user yang sedang login.');
        }

        // Ambil data tanda tangan
        $this->tandaTangan = $this->getTandaTangan();
    }

    public function getTandaTangan(): array
    {
        // Ambil data kelas dari smt3 berdasarkan student
        $kelas = smt5::where('student_id', $this->student->id)
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
        $pdf = Pdf::loadView('filament.student.pages.raport-pdf5', $data);

        // Unduh file
        return response()->streamDownload(
            fn() => print($pdf->output()),
            'Raport Semester 5.pdf'
        );
    }
}
