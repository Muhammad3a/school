<?php

namespace App\Filament\Resources\Cps5Resource\Pages;

use App\Filament\Resources\Cps5Resource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateCps5 extends CreateRecord
{
    protected static string $resource = Cps5Resource::class;

    protected function getRedirectUrl(): string
    {
        // Mengarahkan ke halaman daftar setelah berhasil membuat data
        return $this->getResource()::getUrl('index');
    }
}
