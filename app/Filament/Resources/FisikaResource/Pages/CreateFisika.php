<?php

namespace App\Filament\Resources\FisikaResource\Pages;

use App\Filament\Resources\FisikaResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateFisika extends CreateRecord
{
    protected static string $resource = FisikaResource::class;

    protected function getRedirectUrl(): string
    {
        // Mengarahkan ke halaman daftar setelah berhasil membuat data
        return $this->getResource()::getUrl('index');
    }
}
