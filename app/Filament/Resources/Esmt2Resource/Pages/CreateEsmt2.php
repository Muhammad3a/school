<?php

namespace App\Filament\Resources\Esmt2Resource\Pages;

use App\Filament\Resources\Esmt2Resource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateEsmt2 extends CreateRecord
{
    protected static string $resource = Esmt2Resource::class;

    protected function getRedirectUrl(): string
    {
        // Mengarahkan ke halaman daftar setelah berhasil membuat data
        return $this->getResource()::getUrl('index');
    }
}
