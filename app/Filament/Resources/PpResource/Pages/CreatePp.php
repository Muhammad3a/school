<?php

namespace App\Filament\Resources\PpResource\Pages;

use App\Filament\Resources\PpResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePp extends CreateRecord
{
    protected static string $resource = PpResource::class;

    protected function getRedirectUrl(): string
    {
        // Mengarahkan ke halaman daftar setelah berhasil membuat data
        return $this->getResource()::getUrl('index');
    }
}
