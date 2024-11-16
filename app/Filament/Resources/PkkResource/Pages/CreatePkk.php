<?php

namespace App\Filament\Resources\PkkResource\Pages;

use App\Filament\Resources\PkkResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePkk extends CreateRecord
{
    protected static string $resource = PkkResource::class;

    protected function getRedirectUrl(): string
    {
        // Mengarahkan ke halaman daftar setelah berhasil membuat data
        return $this->getResource()::getUrl('index');
    }
}
