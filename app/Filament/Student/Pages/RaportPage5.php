<?php

namespace App\Filament\Student\Pages;


use App\Models\cps5;
use App\Models\Student;
use Filament\Pages\Page;

class RaportPage5 extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.student.pages.raportpage5';

    protected static ?string $navigationLabel = 'Raport Semester 5';

    public $student; // Properti student didefinisikan
    public $cpSemesters;

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
            ]) // Muat data smt1
            ->first();

        $this->cpSemesters = cps5::all();

        if (!$this->student) {
            abort(505, 'Data student tidak ditemukan untuk user yang sedang login.');
        }
    }
}
