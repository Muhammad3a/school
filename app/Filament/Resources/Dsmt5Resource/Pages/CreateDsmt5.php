<?php

namespace App\Filament\Resources\Dsmt5Resource\Pages;

use App\Filament\Resources\Dsmt5Resource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateDsmt5 extends CreateRecord
{
    protected static string $resource = Dsmt5Resource::class;

    protected function getRedirectUrl(): string
    {
        // Mengarahkan ke halaman daftar setelah berhasil membuat data
        return $this->getResource()::getUrl('index');
    }
}
