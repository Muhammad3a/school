<?php

namespace App\Filament\Resources\Usmt2Resource\Pages;

use App\Filament\Resources\Usmt2Resource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateUsmt2 extends CreateRecord
{
    protected static string $resource = Usmt2Resource::class;

    protected function getRedirectUrl(): string
    {
        // Mengarahkan ke halaman daftar setelah berhasil membuat data
        return $this->getResource()::getUrl('index');
    }
}
