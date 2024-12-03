<?php

namespace App\Filament\Student\Pages;


use App\Models\cps4;
use App\Models\Student;
use Filament\Pages\Page;

class RaportPage4 extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.student.pages.raportpage4';

    protected static ?string $navigationLabel = 'Raport Semester 4';

    public $student; // Properti student didefinisikan
    public $cpSemesters;

    public function mount()
    {
        // Ambil data student berdasarkan user yang login
        $this->student = Student::where('user_id', auth()->id())
            ->with([
                'smt4',
                'usmt4',
                'esmt4',
                'Kindustri.jengke',
                'Pkl.jengke',
                'UjiKom.jengke',
                'dsmt4',
                'psmt4',
            ]) // Muat data smt1
            ->first();

        $this->cpSemesters = cps4::all();

        if (!$this->student) {
            abort(404, 'Data student tidak ditemukan untuk user yang sedang login.');
        }
    }
}
