<?php

namespace App\Filament\Resources\KeberkerjaanResource\Pages;

use App\Filament\Resources\KeberkerjaanResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateKeberkerjaan extends CreateRecord
{
    protected static string $resource = KeberkerjaanResource::class;

    protected function getRedirectUrl(): string
    {
        // Mengarahkan ke halaman daftar setelah berhasil membuat data
        return $this->getResource()::getUrl('index');
    }
}
