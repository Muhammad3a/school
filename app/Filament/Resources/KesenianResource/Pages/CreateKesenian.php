<?php

namespace App\Filament\Resources\KesenianResource\Pages;

use App\Filament\Resources\KesenianResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateKesenian extends CreateRecord
{
    protected static string $resource = KesenianResource::class;

    protected function getRedirectUrl(): string
    {
        // Mengarahkan ke halaman daftar setelah berhasil membuat data
        return $this->getResource()::getUrl('index');
    }
}
