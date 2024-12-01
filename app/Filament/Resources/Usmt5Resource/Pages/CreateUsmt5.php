<?php

namespace App\Filament\Resources\Usmt5Resource\Pages;

use App\Filament\Resources\Usmt5Resource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateUsmt5 extends CreateRecord
{
    protected static string $resource = Usmt5Resource::class;

    protected function getRedirectUrl(): string
    {
        // Mengarahkan ke halaman daftar setelah berhasil membuat data
        return $this->getResource()::getUrl('index');
    }
}
