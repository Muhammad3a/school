<?php

namespace App\Filament\Resources\PmembacaalquranResource\Pages;

use App\Filament\Resources\PmembacaalquranResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePmembacaalquran extends CreateRecord
{
    protected static string $resource = PmembacaalquranResource::class;

    protected function getRedirectUrl(): string
    {
        // Mengarahkan ke halaman daftar setelah berhasil membuat data
        return $this->getResource()::getUrl('index');
    }
}
