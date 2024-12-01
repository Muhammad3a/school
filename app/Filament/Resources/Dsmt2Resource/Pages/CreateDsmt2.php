<?php

namespace App\Filament\Resources\Dsmt2Resource\Pages;

use App\Filament\Resources\Dsmt2Resource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateDsmt2 extends CreateRecord
{
    protected static string $resource = Dsmt2Resource::class;

    protected function getRedirectUrl(): string
    {
        // Mengarahkan ke halaman daftar setelah berhasil membuat data
        return $this->getResource()::getUrl('index');
    }
}
