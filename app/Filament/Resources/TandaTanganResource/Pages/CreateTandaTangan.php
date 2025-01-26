<?php

namespace App\Filament\Resources\TandaTanganResource\Pages;

use App\Filament\Resources\TandaTanganResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateTandaTangan extends CreateRecord
{
    protected static string $resource = TandaTanganResource::class;

    protected function getRedirectUrl(): string
    {
        // Mengarahkan ke halaman daftar setelah berhasil membuat data
        return $this->getResource()::getUrl('index');
    }
}
