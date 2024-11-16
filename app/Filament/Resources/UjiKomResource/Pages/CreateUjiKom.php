<?php

namespace App\Filament\Resources\UjiKomResource\Pages;

use App\Filament\Resources\UjiKomResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateUjiKom extends CreateRecord
{
    protected static string $resource = UjiKomResource::class;

    protected function getRedirectUrl(): string
    {
        // Mengarahkan ke halaman daftar setelah berhasil membuat data
        return $this->getResource()::getUrl('index');
    }
}
