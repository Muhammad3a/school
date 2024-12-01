<?php

namespace App\Filament\Resources\Psmt6Resource\Pages;

use App\Filament\Resources\Psmt6Resource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePsmt6 extends CreateRecord
{
    protected static string $resource = Psmt6Resource::class;

    protected function getRedirectUrl(): string
    {
        // Mengarahkan ke halaman daftar setelah berhasil membuat data
        return $this->getResource()::getUrl('index');
    }
}
