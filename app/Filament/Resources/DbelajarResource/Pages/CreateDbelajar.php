<?php

namespace App\Filament\Resources\DbelajarResource\Pages;

use App\Filament\Resources\DbelajarResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateDbelajar extends CreateRecord
{
    protected static string $resource = DbelajarResource::class;

    protected function getRedirectUrl(): string
    {
        // Mengarahkan ke halaman daftar setelah berhasil membuat data
        return $this->getResource()::getUrl('index');
    }
}
