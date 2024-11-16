<?php

namespace App\Filament\Resources\DkeamananResource\Pages;

use App\Filament\Resources\DkeamananResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateDkeamanan extends CreateRecord
{
    protected static string $resource = DkeamananResource::class;

    protected function getRedirectUrl(): string
    {
        // Mengarahkan ke halaman daftar setelah berhasil membuat data
        return $this->getResource()::getUrl('index');
    }
}
