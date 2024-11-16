<?php

namespace App\Filament\Resources\DberbusanaResource\Pages;

use App\Filament\Resources\DberbusanaResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateDberbusana extends CreateRecord
{
    protected static string $resource = DberbusanaResource::class;

    protected function getRedirectUrl(): string
    {
        // Mengarahkan ke halaman daftar setelah berhasil membuat data
        return $this->getResource()::getUrl('index');
    }
}
