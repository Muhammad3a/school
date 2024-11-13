<?php

namespace App\Filament\Resources\PbtgmResource\Pages;

use App\Filament\Resources\PbtgmResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePbtgm extends CreateRecord
{
    protected static string $resource = PbtgmResource::class;

    protected function getRedirectUrl(): string
    {
        // Mengarahkan ke halaman daftar setelah berhasil membuat data
        return $this->getResource()::getUrl('index');
    }
}
