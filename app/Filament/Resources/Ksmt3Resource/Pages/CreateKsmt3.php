<?php

namespace App\Filament\Resources\Ksmt3Resource\Pages;

use App\Filament\Resources\Ksmt3Resource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateKsmt3 extends CreateRecord
{
    protected static string $resource = Ksmt3Resource::class;

    protected function getRedirectUrl(): string
    {
        // Mengarahkan ke halaman daftar setelah berhasil membuat data
        return $this->getResource()::getUrl('index');
    }
}
