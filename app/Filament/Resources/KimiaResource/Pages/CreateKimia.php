<?php

namespace App\Filament\Resources\KimiaResource\Pages;

use App\Filament\Resources\KimiaResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateKimia extends CreateRecord
{
    protected static string $resource = KimiaResource::class;

    protected function getRedirectUrl(): string
    {
        // Mengarahkan ke halaman daftar setelah berhasil membuat data
        return $this->getResource()::getUrl('index');
    }
}
