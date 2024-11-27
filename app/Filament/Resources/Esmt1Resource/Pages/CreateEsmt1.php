<?php

namespace App\Filament\Resources\Esmt1Resource\Pages;

use App\Filament\Resources\Esmt1Resource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateEsmt1 extends CreateRecord
{
    protected static string $resource = Esmt1Resource::class;

    protected function getRedirectUrl(): string
    {
        // Mengarahkan ke halaman daftar setelah berhasil membuat data
        return $this->getResource()::getUrl('index');
    }
}
