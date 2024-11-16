<?php

namespace App\Filament\Resources\PmemeliharaadabResource\Pages;

use App\Filament\Resources\PmemeliharaadabResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePmemeliharaadab extends CreateRecord
{
    protected static string $resource = PmemeliharaadabResource::class;

    protected function getRedirectUrl(): string
    {
        // Mengarahkan ke halaman daftar setelah berhasil membuat data
        return $this->getResource()::getUrl('index');
    }
}
