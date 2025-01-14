<?php

namespace App\Filament\Resources\Esmt4Resource\Pages;

use App\Filament\Resources\Esmt4Resource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateEsmt4 extends CreateRecord
{
    protected static string $resource = Esmt4Resource::class;

    protected function getRedirectUrl(): string
    {
        // Mengarahkan ke halaman daftar setelah berhasil membuat data
        return $this->getResource()::getUrl('index');
    }
}
