<?php

namespace App\Filament\Resources\DberbahasaResource\Pages;

use App\Filament\Resources\DberbahasaResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateDberbahasa extends CreateRecord
{
    protected static string $resource = DberbahasaResource::class;

    protected function getRedirectUrl(): string
    {
        // Mengarahkan ke halaman daftar setelah berhasil membuat data
        return $this->getResource()::getUrl('index');
    }
}
