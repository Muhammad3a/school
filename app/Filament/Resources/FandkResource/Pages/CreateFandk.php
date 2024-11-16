<?php

namespace App\Filament\Resources\FandkResource\Pages;

use App\Filament\Resources\FandkResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateFandk extends CreateRecord
{
    protected static string $resource = FandkResource::class;

    protected function getRedirectUrl(): string
    {
        // Mengarahkan ke halaman daftar setelah berhasil membuat data
        return $this->getResource()::getUrl('index');
    }
}
