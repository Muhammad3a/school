<?php

namespace App\Filament\Resources\PtalimdanceramahResource\Pages;

use App\Filament\Resources\PtalimdanceramahResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePtalimdanceramah extends CreateRecord
{
    protected static string $resource = PtalimdanceramahResource::class;

    protected function getRedirectUrl(): string
    {
        // Mengarahkan ke halaman daftar setelah berhasil membuat data
        return $this->getResource()::getUrl('index');
    }
}
