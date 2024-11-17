<?php

namespace App\Filament\Resources\Smt1Resource\Pages;

use App\Filament\Resources\Smt1Resource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateSmt1 extends CreateRecord
{
    protected static string $resource = Smt1Resource::class;

    protected function getRedirectUrl(): string
    {
        // Mengarahkan ke halaman daftar setelah berhasil membuat data
        return $this->getResource()::getUrl('index');
    }
}
