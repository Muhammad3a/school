<?php

namespace App\Filament\Resources\BkerjaResource\Pages;

use App\Filament\Resources\BkerjaResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateBkerja extends CreateRecord
{
    protected static string $resource = BkerjaResource::class;

    protected function getRedirectUrl(): string
    {
        // Mengarahkan ke halaman daftar setelah berhasil membuat data
        return $this->getResource()::getUrl('index');
    }
}
