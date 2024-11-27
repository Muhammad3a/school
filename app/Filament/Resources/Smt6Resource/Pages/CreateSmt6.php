<?php

namespace App\Filament\Resources\Smt6Resource\Pages;

use App\Filament\Resources\Smt6Resource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateSmt6 extends CreateRecord
{
    protected static string $resource = Smt6Resource::class;

    protected function getRedirectUrl(): string
    {
        // Mengarahkan ke halaman daftar setelah berhasil membuat data
        return $this->getResource()::getUrl('index');
    }
}
