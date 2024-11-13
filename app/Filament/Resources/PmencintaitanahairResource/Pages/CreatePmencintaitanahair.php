<?php

namespace App\Filament\Resources\PmencintaitanahairResource\Pages;

use App\Filament\Resources\PmencintaitanahairResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePmencintaitanahair extends CreateRecord
{
    protected static string $resource = PmencintaitanahairResource::class;

    protected function getRedirectUrl(): string
    {
        // Mengarahkan ke halaman daftar setelah berhasil membuat data
        return $this->getResource()::getUrl('index');
    }
}
