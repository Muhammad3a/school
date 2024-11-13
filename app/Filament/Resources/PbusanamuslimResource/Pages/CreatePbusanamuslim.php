<?php

namespace App\Filament\Resources\PbusanamuslimResource\Pages;

use App\Filament\Resources\PbusanamuslimResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePbusanamuslim extends CreateRecord
{
    protected static string $resource = PbusanamuslimResource::class;

    protected function getRedirectUrl(): string
    {
        // Mengarahkan ke halaman daftar setelah berhasil membuat data
        return $this->getResource()::getUrl('index');
    }
}
