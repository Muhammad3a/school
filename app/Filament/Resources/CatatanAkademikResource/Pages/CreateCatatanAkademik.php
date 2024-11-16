<?php

namespace App\Filament\Resources\CatatanAkademikResource\Pages;

use App\Filament\Resources\CatatanAkademikResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateCatatanAkademik extends CreateRecord
{
    protected static string $resource = CatatanAkademikResource::class;

    protected function getRedirectUrl(): string
    {
        // Mengarahkan ke halaman daftar setelah berhasil membuat data
        return $this->getResource()::getUrl('index');
    }
}
