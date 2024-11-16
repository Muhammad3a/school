<?php

namespace App\Filament\Resources\PwebResource\Pages;

use App\Filament\Resources\PwebResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePweb extends CreateRecord
{
    protected static string $resource = PwebResource::class;

    protected function getRedirectUrl(): string
    {
        // Mengarahkan ke halaman daftar setelah berhasil membuat data
        return $this->getResource()::getUrl('index');
    }
}
