<?php

namespace App\Filament\Student\Pages;

use App\Models\Cps1;
use App\Models\Student;
use Filament\Pages\Page;
use Barryvdh\DomPDF\Facade\Pdf;

class RaportPage extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    protected static string $view = 'filament.student.pages.raport-page';
    protected static ?string $navigationLabel = 'Raport Semester 1';

    public $student;
    public $cpSemesters;

    public function mount()
    {
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

        $this->cpSemesters = Cps1::all();

        if (!$this->student) {
            abort(404, 'Data student tidak ditemukan untuk user yang sedang login.');
        }
    }

    public function cetakPDF()
    {
        // Data untuk PDF
        $data = [
            'student' => $this->student,
            'cpSemesters' => $this->cpSemesters,
        ];

        // Render PDF
        $pdf = Pdf::loadView('filament.student.pages.raport-pdf', $data);

        // Unduh file
        return response()->streamDownload(
            fn() => print($pdf->output()),
            'Raport Semester 1.pdf'
        );
    }

    public  static function getLabel(): ?string
    {
        $locale = app()->getLocale();

        if ($locale == 'id') {
            return ".";
        } else
            return "";
    }
}
