<?php

namespace App\Filament\Student\Pages;

use App\Models\Student;
use Filament\Pages\Page;
use App\Models\CpSemester;

class RaportPage extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    protected static string $view = 'filament.student.pages.raport-page';
    protected static ?string $navigationLabel = 'Raport Semseter 1';

    public $student; // Properti student didefinisikan
    public $cpSemesters; // Properti student didefinisikan

    public function mount()
    {
        // Ambil data student berdasarkan user yang login
        $this->student = Student::where('user_id', auth()->id())
            ->with(['smt1']) // Muat data smt1
            ->first();

        $this->cpSemesters = CpSemester::all();

        if (!$this->student) {
            abort(404, 'Data student tidak ditemukan untuk user yang sedang login.');
        }
    }
}
