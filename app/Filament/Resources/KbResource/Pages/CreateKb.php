<?php

namespace App\Filament\Resources\KbResource\Pages;

use App\Filament\Resources\KbResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateKb extends CreateRecord
{
    protected static string $resource = KbResource::class;

    protected function getRedirectUrl(): string
    {
        // Mengarahkan ke halaman daftar setelah berhasil membuat data
        return $this->getResource()::getUrl('index');
    }
}
