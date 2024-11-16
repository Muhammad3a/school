<?php

namespace App\Filament\Resources\SbResource\Pages;

use App\Filament\Resources\SbResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateSb extends CreateRecord
{
    protected static string $resource = SbResource::class;

    protected function getRedirectUrl(): string
    {
        // Mengarahkan ke halaman daftar setelah berhasil membuat data
        return $this->getResource()::getUrl('index');
    }
}
