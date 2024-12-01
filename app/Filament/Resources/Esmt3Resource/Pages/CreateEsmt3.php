<?php

namespace App\Filament\Resources\Esmt3Resource\Pages;

use App\Filament\Resources\Esmt3Resource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateEsmt3 extends CreateRecord
{
    protected static string $resource = Esmt3Resource::class;

    protected function getRedirectUrl(): string
    {
        // Mengarahkan ke halaman daftar setelah berhasil membuat data
        return $this->getResource()::getUrl('index');
    }
}
