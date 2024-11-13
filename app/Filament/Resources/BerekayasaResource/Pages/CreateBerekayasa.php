<?php

namespace App\Filament\Resources\BerekayasaResource\Pages;

use App\Filament\Resources\BerekayasaResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateBerekayasa extends CreateRecord
{
    protected static string $resource = BerekayasaResource::class;

    protected function getRedirectUrl(): string
    {
        // Mengarahkan ke halaman daftar setelah berhasil membuat data
        return $this->getResource()::getUrl('index');
    }
}
