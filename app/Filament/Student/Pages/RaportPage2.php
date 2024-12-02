<?php

namespace App\Filament\Student\Pages;

use App\Models\cps2;
use App\Models\Student;
use Filament\Pages\Page;

class RaportPage2 extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.student.pages.raport-page2';

    protected static ?string $navigationLabel = 'Raport Semester 2';

    public $student; // Properti student didefinisikan
    public $cpSemesters;

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
            ]) // Muat data smt1
            ->first();

        $this->cpSemesters = cps2::all();

        if (!$this->student) {
            abort(404, 'Data student tidak ditemukan untuk user yang sedang login.');
        }
    }
}
