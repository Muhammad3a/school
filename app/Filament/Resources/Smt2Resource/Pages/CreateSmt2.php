<?php

namespace App\Filament\Resources\Smt2Resource\Pages;

use App\Filament\Resources\Smt2Resource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateSmt2 extends CreateRecord
{
    protected static string $resource = Smt2Resource::class;

    protected function getRedirectUrl(): string
    {
        // Mengarahkan ke halaman daftar setelah berhasil membuat data
        return $this->getResource()::getUrl('index');
    }
}
