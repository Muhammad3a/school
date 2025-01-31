<?php

namespace App\Filament\Resources\Dsmt3Resource\Pages;

use App\Filament\Resources\Dsmt3Resource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateDsmt3 extends CreateRecord
{
    protected static string $resource = Dsmt3Resource::class;

    protected function getRedirectUrl(): string
    {
        // Mengarahkan ke halaman daftar setelah berhasil membuat data
        return $this->getResource()::getUrl('index');
    }
}
