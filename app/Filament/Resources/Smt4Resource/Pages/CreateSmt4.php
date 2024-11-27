<?php

namespace App\Filament\Resources\Smt4Resource\Pages;

use App\Filament\Resources\Smt4Resource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateSmt4 extends CreateRecord
{
    protected static string $resource = Smt4Resource::class;

    protected function getRedirectUrl(): string
    {
        // Mengarahkan ke halaman daftar setelah berhasil membuat data
        return $this->getResource()::getUrl('index');
    }
}
