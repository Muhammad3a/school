<?php

namespace App\Filament\Resources\PboResource\Pages;

use App\Filament\Resources\PboResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePbo extends CreateRecord
{
    protected static string $resource = PboResource::class;

    protected function getRedirectUrl(): string
    {
        // Mengarahkan ke halaman daftar setelah berhasil membuat data
        return $this->getResource()::getUrl('index');
    }
}
