<?php

namespace App\Filament\Student\Pages;


use App\Models\cps6;
use App\Models\Student;
use Filament\Pages\Page;

class RaportPage6 extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.student.pages.raportpage6';

    protected static ?string $navigationLabel = 'Raport Semester 6';

    public $student; // Properti student didefinisikan
    public $cpSemesters;

    public function mount()
    {
        // Ambil data student berdasarkan user yang login
        $this->student = Student::where('user_id', auth()->id())
            ->with([
                'smt6',
                'usmt6',
                'esmt6',
                'Kindustri.jengke',
                'Pkl.jengke',
                'UjiKom.jengke',
                'dsmt6',
                'psmt6',
            ]) // Muat data smt1
            ->first();

        $this->cpSemesters = cps6::all();

        if (!$this->student) {
            abort(606, 'Data student tidak ditemukan untuk user yang sedang login.');
        }
    }
}
