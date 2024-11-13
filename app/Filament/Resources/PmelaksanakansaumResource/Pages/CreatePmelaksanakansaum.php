<?php

namespace App\Filament\Resources\PmelaksanakansaumResource\Pages;

use App\Filament\Resources\PmelaksanakansaumResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePmelaksanakansaum extends CreateRecord
{
    protected static string $resource = PmelaksanakansaumResource::class;

    protected function getRedirectUrl(): string
    {
        // Mengarahkan ke halaman daftar setelah berhasil membuat data
        return $this->getResource()::getUrl('index');
    }
}
