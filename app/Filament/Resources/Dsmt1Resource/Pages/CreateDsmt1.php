<?php

namespace App\Filament\Resources\Dsmt1Resource\Pages;

use App\Filament\Resources\Dsmt1Resource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateDsmt1 extends CreateRecord
{
    protected static string $resource = Dsmt1Resource::class;

    protected function getRedirectUrl(): string
    {
        // Mengarahkan ke halaman daftar setelah berhasil membuat data
        return $this->getResource()::getUrl('index');
    }
}
