<?php

namespace App\Filament\Resources\OkesehatanResource\Pages;

use App\Filament\Resources\OkesehatanResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateOkesehatan extends CreateRecord
{
    protected static string $resource = OkesehatanResource::class;

    protected function getRedirectUrl(): string
    {
        // Mengarahkan ke halaman daftar setelah berhasil membuat data
        return $this->getResource()::getUrl('index');
    }
}
