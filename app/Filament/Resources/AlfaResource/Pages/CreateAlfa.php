<?php

namespace App\Filament\Resources\AlfaResource\Pages;

use App\Filament\Resources\AlfaResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateAlfa extends CreateRecord
{
    protected static string $resource = AlfaResource::class;

    protected function getRedirectUrl(): string
    {
        // Mengarahkan ke halaman daftar setelah berhasil membuat data
        return $this->getResource()::getUrl('index');
    }
}
