<?php

namespace App\Filament\Resources\StudentHasClassResource\Pages;

use App\Filament\Resources\StudentHasClassResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateStudentHasClass extends CreateRecord
{
    protected static string $resource = StudentHasClassResource::class;

    protected function getRedirectUrl(): string
    {
        // Mengarahkan ke halaman daftar setelah berhasil membuat data
        return $this->getResource()::getUrl('index');
    }
}
