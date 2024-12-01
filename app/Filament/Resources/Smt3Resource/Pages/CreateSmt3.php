<?php

namespace App\Filament\Resources\Smt3Resource\Pages;

use App\Filament\Resources\Smt3Resource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateSmt3 extends CreateRecord
{
    protected static string $resource = Smt3Resource::class;

    protected function getRedirectUrl(): string
    {
        // Mengarahkan ke halaman daftar setelah berhasil membuat data
        return $this->getResource()::getUrl('index');
    }
}
