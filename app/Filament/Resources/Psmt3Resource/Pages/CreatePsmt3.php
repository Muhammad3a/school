<?php

namespace App\Filament\Resources\Psmt3Resource\Pages;

use App\Filament\Resources\Psmt3Resource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePsmt3 extends CreateRecord
{
    protected static string $resource = Psmt3Resource::class;

    protected function getRedirectUrl(): string
    {
        // Mengarahkan ke halaman daftar setelah berhasil membuat data
        return $this->getResource()::getUrl('index');
    }
}
