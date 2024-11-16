<?php

namespace App\Filament\Resources\PpbResource\Pages;

use App\Filament\Resources\PpbResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePpb extends CreateRecord
{
    protected static string $resource = PpbResource::class;

    protected function getRedirectUrl(): string
    {
        // Mengarahkan ke halaman daftar setelah berhasil membuat data
        return $this->getResource()::getUrl('index');
    }
}
