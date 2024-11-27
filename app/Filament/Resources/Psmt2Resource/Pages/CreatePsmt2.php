<?php

namespace App\Filament\Resources\Psmt2Resource\Pages;

use App\Filament\Resources\Psmt2Resource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePsmt2 extends CreateRecord
{
    protected static string $resource = Psmt2Resource::class;

    protected function getRedirectUrl(): string
    {
        // Mengarahkan ke halaman daftar setelah berhasil membuat data
        return $this->getResource()::getUrl('index');
    }
}
