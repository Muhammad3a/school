<?php

namespace App\Filament\Resources\Cps3Resource\Pages;

use App\Filament\Resources\Cps3Resource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateCps3 extends CreateRecord
{
    protected static string $resource = Cps3Resource::class;

    protected function getRedirectUrl(): string
    {
        // Mengarahkan ke halaman daftar setelah berhasil membuat data
        return $this->getResource()::getUrl('index');
    }
}
