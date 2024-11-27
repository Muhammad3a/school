<?php

namespace App\Filament\Resources\Psmt4Resource\Pages;

use App\Filament\Resources\Psmt4Resource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePsmt4 extends CreateRecord
{
    protected static string $resource = Psmt4Resource::class;

    protected function getRedirectUrl(): string
    {
        // Mengarahkan ke halaman daftar setelah berhasil membuat data
        return $this->getResource()::getUrl('index');
    }
}
