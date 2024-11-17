<?php

namespace App\Filament\Resources\StudentResource\Pages;

use App\Filament\Resources\StudentResource;
use Filament\Resources\Pages\Page;
use App\Models\Student;

class RaportPage extends Page
{
    protected static string $resource = StudentResource::class;

    protected static string $view = 'filament.resources.student-resource.pages.raport-page';

    public function mount($record)
    {
        // Ambil data siswa berdasarkan ID (record)
        $this->student = Student::with([
            'pais',
            // 'pancasilaScores',
            // 'bahasaIndonesiaScores',
            // 'bahasaInggrisScores',
            // Tambahkan relasi lainnya di sini
        ])->findOrFail($record);
    }
}
