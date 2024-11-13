<?php

namespace App\Filament\Resources\BarabResource\Pages;

use App\Filament\Resources\BarabResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateBarab extends CreateRecord
{
    protected static string $resource = BarabResource::class;

    protected function getRedirectUrl(): string
    {
        // Mengarahkan ke halaman daftar setelah berhasil membuat data
        return $this->getResource()::getUrl('index');
    }
}
