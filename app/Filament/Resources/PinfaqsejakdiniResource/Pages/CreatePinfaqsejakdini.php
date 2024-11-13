<?php

namespace App\Filament\Resources\PinfaqsejakdiniResource\Pages;

use App\Filament\Resources\PinfaqsejakdiniResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePinfaqsejakdini extends CreateRecord
{
    protected static string $resource = PinfaqsejakdiniResource::class;

    protected function getRedirectUrl(): string
    {
        // Mengarahkan ke halaman daftar setelah berhasil membuat data
        return $this->getResource()::getUrl('index');
    }
}
