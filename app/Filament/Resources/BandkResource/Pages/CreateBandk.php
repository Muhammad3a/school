<?php

namespace App\Filament\Resources\BandkResource\Pages;

use App\Filament\Resources\BandkResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateBandk extends CreateRecord
{
    protected static string $resource = BandkResource::class;

    protected function getRedirectUrl(): string
    {
        // Mengarahkan ke halaman daftar setelah berhasil membuat data
        return $this->getResource()::getUrl('index');
    }
}
