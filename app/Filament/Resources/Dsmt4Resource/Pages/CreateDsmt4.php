<?php

namespace App\Filament\Resources\Dsmt4Resource\Pages;

use App\Filament\Resources\Dsmt4Resource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateDsmt4 extends CreateRecord
{
    protected static string $resource = Dsmt4Resource::class;

    protected function getRedirectUrl(): string
    {
        // Mengarahkan ke halaman daftar setelah berhasil membuat data
        return $this->getResource()::getUrl('index');
    }
}
