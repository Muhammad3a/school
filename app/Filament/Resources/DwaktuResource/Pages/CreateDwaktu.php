<?php

namespace App\Filament\Resources\DwaktuResource\Pages;

use App\Filament\Resources\DwaktuResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateDwaktu extends CreateRecord
{
    protected static string $resource = DwaktuResource::class;

    protected function getRedirectUrl(): string
    {
        // Mengarahkan ke halaman daftar setelah berhasil membuat data
        return $this->getResource()::getUrl('index');
    }
}
