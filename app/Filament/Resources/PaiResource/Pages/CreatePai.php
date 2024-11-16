<?php

namespace App\Filament\Resources\PaiResource\Pages;

use App\Filament\Resources\PaiResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePai extends CreateRecord
{
    protected static string $resource = PaiResource::class;

    protected function getRedirectUrl(): string
    {
        // Mengarahkan ke halaman daftar setelah berhasil membuat data
        return $this->getResource()::getUrl('index');
    }
}
