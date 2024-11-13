<?php

namespace App\Filament\Resources\DibadahResource\Pages;

use App\Filament\Resources\DibadahResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateDibadah extends CreateRecord
{
    protected static string $resource = DibadahResource::class;

    protected function getRedirectUrl(): string
    {
        // Mengarahkan ke halaman daftar setelah berhasil membuat data
        return $this->getResource()::getUrl('index');
    }
}
