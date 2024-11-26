<?php

namespace App\Filament\Student\Pages;

use App\Models\cps6;
use App\Models\Student;
use Filament\Pages\Page;

class raportpage6 extends Page
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
            ->with(['smt6']) // Muat data smt1
            ->first();

        $this->student = Student::where('user_id', auth()->id())
            ->with(['usmt6']) // Muat data smt1
            ->first();

        $this->student = Student::where('user_id', auth()->id())
            ->with(['esmt6']) // Muat data smt1
            ->first();

        $this->student = Student::where('user_id', auth()->id())
            ->with(['Kindustri.jengke']) // Muat data smt1
            ->first();

        $this->student = Student::where('user_id', auth()->id())
            ->with(['Pkl.jengke']) // Muat data smt1
            ->first();

        $this->student = Student::where('user_id', auth()->id())
            ->with(['UjiKom.jengke']) // Muat data smt1
            ->first();

        $this->student = Student::where('user_id', auth()->id())
            ->with(['dsmt6']) // Muat data smt1
            ->first();

        $this->student = Student::where('user_id', auth()->id())
            ->with(['psmt6']) // Muat data smt1
            ->first();

        $this->cpSemesters = cps6::all();

        if (!$this->student) {
            abort(404, 'Data student tidak ditemukan untuk user yang sedang login.');
        }
    }
}







