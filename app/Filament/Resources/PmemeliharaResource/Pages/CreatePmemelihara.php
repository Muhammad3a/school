<?php

namespace App\Filament\Resources\PmemeliharaResource\Pages;

use App\Filament\Resources\PmemeliharaResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePmemelihara extends CreateRecord
{
    protected static string $resource = PmemeliharaResource::class;

    protected function getRedirectUrl(): string
    {
        // Mengarahkan ke halaman daftar setelah berhasil membuat data
        return $this->getResource()::getUrl('index');
    }
}
