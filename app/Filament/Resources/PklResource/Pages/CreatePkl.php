<?php

namespace App\Filament\Resources\PklResource\Pages;

use App\Filament\Resources\PklResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePkl extends CreateRecord
{
    protected static string $resource = PklResource::class;

    protected function getRedirectUrl(): string
    {
        // Mengarahkan ke halaman daftar setelah berhasil membuat data
        return $this->getResource()::getUrl('index');
    }
}
