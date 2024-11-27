<?php

namespace App\Filament\Resources\Cps6Resource\Pages;

use App\Filament\Resources\Cps6Resource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateCps6 extends CreateRecord
{
    protected static string $resource = Cps6Resource::class;

    protected function getRedirectUrl(): string
    {
        // Mengarahkan ke halaman daftar setelah berhasil membuat data
        return $this->getResource()::getUrl('index');
    }
}
