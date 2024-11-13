<?php

namespace App\Filament\Resources\PramukaResource\Pages;

use App\Filament\Resources\PramukaResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePramuka extends CreateRecord
{
    protected static string $resource = PramukaResource::class;

    protected function getRedirectUrl(): string
    {
        // Mengarahkan ke halaman daftar setelah berhasil membuat data
        return $this->getResource()::getUrl('index');
    }
}
