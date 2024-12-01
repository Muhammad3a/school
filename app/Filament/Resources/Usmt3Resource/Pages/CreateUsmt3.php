<?php

namespace App\Filament\Resources\Usmt3Resource\Pages;

use App\Filament\Resources\Usmt3Resource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateUsmt3 extends CreateRecord
{
    protected static string $resource = Usmt3Resource::class;

    protected function getRedirectUrl(): string
    {
        // Mengarahkan ke halaman daftar setelah berhasil membuat data
        return $this->getResource()::getUrl('index');
    }
}
