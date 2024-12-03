<?php

namespace App\Filament\Student\Pages;

use App\Models\cps3;
use App\Models\Student;
use Filament\Pages\Page;

class RaportPage3 extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.student.pages.raport-page3';

    protected static ?string $navigationLabel = 'Raport Semester 3';

    public $student; // Properti student didefinisikan
    public $cpSemesters;

    public function mount()
    {
        // Ambil data student berdasarkan user yang login
        $this->student = Student::where('user_id', auth()->id())
            ->with([
                'smt3',
                'usmt3',
                'esmt3',
                'Kindustri.jengke',
                'Pkl.jengke',
                'UjiKom.jengke',
                'dsmt3',
                'psmt3',
            ]) // Muat data smt1
            ->first();

        $this->cpSemesters = cps3::all();

        if (!$this->student) {
            abort(404, 'Data student tidak ditemukan untuk user yang sedang login.');
        }
    }
}
