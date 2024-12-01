<?php

namespace App\Filament\Resources\Esmt5Resource\Pages;

use App\Filament\Resources\Esmt5Resource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateEsmt5 extends CreateRecord
{
    protected static string $resource = Esmt5Resource::class;

    protected function getRedirectUrl(): string
    {
        // Mengarahkan ke halaman daftar setelah berhasil membuat data
        return $this->getResource()::getUrl('index');
    }
}
