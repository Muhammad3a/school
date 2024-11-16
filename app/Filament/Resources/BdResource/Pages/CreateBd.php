<?php

namespace App\Filament\Resources\BdResource\Pages;

use App\Filament\Resources\BdResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateBd extends CreateRecord
{
    protected static string $resource = BdResource::class;

    protected function getRedirectUrl(): string
    {
        // Mengarahkan ke halaman daftar setelah berhasil membuat data
        return $this->getResource()::getUrl('index');
    }
}
