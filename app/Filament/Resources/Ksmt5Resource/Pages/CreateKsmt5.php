<?php

namespace App\Filament\Resources\Ksmt5Resource\Pages;

use App\Filament\Resources\Ksmt5Resource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateKsmt5 extends CreateRecord
{
    protected static string $resource = Ksmt5Resource::class;

    protected function getRedirectUrl(): string
    {
        // Mengarahkan ke halaman daftar setelah berhasil membuat data
        return $this->getResource()::getUrl('index');
    }
}
