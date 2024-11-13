<?php

namespace App\Filament\Resources\MtkResource\Pages;

use App\Filament\Resources\MtkResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateMtk extends CreateRecord
{
    protected static string $resource = MtkResource::class;

    protected function getRedirectUrl(): string
    {
        // Mengarahkan ke halaman daftar setelah berhasil membuat data
        return $this->getResource()::getUrl('index');
    }
}
