<?php

namespace App\Filament\Resources\DbertindakResource\Pages;

use App\Filament\Resources\DbertindakResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateDbertindak extends CreateRecord
{
    protected static string $resource = DbertindakResource::class;

    protected function getRedirectUrl(): string
    {
        // Mengarahkan ke halaman daftar setelah berhasil membuat data
        return $this->getResource()::getUrl('index');
    }
}
