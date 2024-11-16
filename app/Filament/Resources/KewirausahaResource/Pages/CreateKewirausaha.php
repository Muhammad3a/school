<?php

namespace App\Filament\Resources\KewirausahaResource\Pages;

use App\Filament\Resources\KewirausahaResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateKewirausaha extends CreateRecord
{
    protected static string $resource = KewirausahaResource::class;

    protected function getRedirectUrl(): string
    {
        // Mengarahkan ke halaman daftar setelah berhasil membuat data
        return $this->getResource()::getUrl('index');
    }
}
