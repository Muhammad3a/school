<?php

namespace App\Filament\Resources\PemturResource\Pages;

use App\Filament\Resources\PemturResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePemtur extends CreateRecord
{
    protected static string $resource = PemturResource::class;

    protected function getRedirectUrl(): string
    {
        // Mengarahkan ke halaman daftar setelah berhasil membuat data
        return $this->getResource()::getUrl('index');
    }
}
