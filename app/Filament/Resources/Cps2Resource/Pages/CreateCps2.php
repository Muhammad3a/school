<?php

namespace App\Filament\Resources\Cps2Resource\Pages;

use App\Filament\Resources\Cps2Resource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateCps2 extends CreateRecord
{
    protected static string $resource = Cps2Resource::class;

    protected function getRedirectUrl(): string
    {
        // Mengarahkan ke halaman daftar setelah berhasil membuat data
        return $this->getResource()::getUrl('index');
    }
}
