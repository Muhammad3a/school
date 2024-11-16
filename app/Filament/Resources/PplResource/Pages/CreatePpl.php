<?php

namespace App\Filament\Resources\PplResource\Pages;

use App\Filament\Resources\PplResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePpl extends CreateRecord
{
    protected static string $resource = PplResource::class;

    protected function getRedirectUrl(): string
    {
        // Mengarahkan ke halaman daftar setelah berhasil membuat data
        return $this->getResource()::getUrl('index');
    }
}
