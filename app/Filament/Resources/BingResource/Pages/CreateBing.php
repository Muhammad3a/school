<?php

namespace App\Filament\Resources\BingResource\Pages;

use App\Filament\Resources\BingResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateBing extends CreateRecord
{
    protected static string $resource = BingResource::class;

    protected function getRedirectUrl(): string
    {
        // Mengarahkan ke halaman daftar setelah berhasil membuat data
        return $this->getResource()::getUrl('index');
    }
}
