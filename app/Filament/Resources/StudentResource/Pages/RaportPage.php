<?php

namespace App\Filament\Resources\StudentResource\Pages;

use App\Filament\Resources\StudentResource;
use Filament\Resources\Pages\Page;
use App\Models\Student;

class RaportPage extends Page
{
    protected static string $resource = StudentResource::class;

    protected static string $view = 'filament.resources.student-resource.pages.raport-page';

    public function mount()
    {
        // Ambil data student berdasarkan user yang login
        $this->student = Student::where('user_id', auth()->id())->with([
            'pais',
            'pancasilaScores',
            'bahasaIndonesiaScores',
            'bahasaInggrisScores'
        ])->firstOrFail();
    }
}
