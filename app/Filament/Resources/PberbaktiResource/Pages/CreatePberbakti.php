<?php

namespace App\Filament\Resources\PberbaktiResource\Pages;

use App\Filament\Resources\PberbaktiResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePberbakti extends CreateRecord
{
    protected static string $resource = PberbaktiResource::class;

    protected function getRedirectUrl(): string
    {
        // Mengarahkan ke halaman daftar setelah berhasil membuat data
        return $this->getResource()::getUrl('index');
    }
}
