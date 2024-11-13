<?php

namespace App\Filament\Resources\PjokResource\Pages;

use App\Filament\Resources\PjokResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePjok extends CreateRecord
{
    protected static string $resource = PjokResource::class;

    protected function getRedirectUrl(): string
    {
        // Mengarahkan ke halaman daftar setelah berhasil membuat data
        return $this->getResource()::getUrl('index');
    }
}
