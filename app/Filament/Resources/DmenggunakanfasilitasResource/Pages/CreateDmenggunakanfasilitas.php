<?php

namespace App\Filament\Resources\DmenggunakanfasilitasResource\Pages;

use App\Filament\Resources\DmenggunakanfasilitasResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateDmenggunakanfasilitas extends CreateRecord
{
    protected static string $resource = DmenggunakanfasilitasResource::class;

    protected function getRedirectUrl(): string
    {
        // Mengarahkan ke halaman daftar setelah berhasil membuat data
        return $this->getResource()::getUrl('index');
    }
}
