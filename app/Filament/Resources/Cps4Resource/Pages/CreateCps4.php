<?php

namespace App\Filament\Resources\Cps4Resource\Pages;

use App\Filament\Resources\Cps4Resource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateCps4 extends CreateRecord
{
    protected static string $resource = Cps4Resource::class;

    protected function getRedirectUrl(): string
    {
        // Mengarahkan ke halaman daftar setelah berhasil membuat data
        return $this->getResource()::getUrl('index');
    }
}
