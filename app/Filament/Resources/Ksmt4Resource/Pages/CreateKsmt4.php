<?php

namespace App\Filament\Resources\Ksmt4Resource\Pages;

use App\Filament\Resources\Ksmt4Resource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateKsmt4 extends CreateRecord
{
    protected static string $resource = Ksmt4Resource::class;

    protected function getRedirectUrl(): string
    {
        // Mengarahkan ke halaman daftar setelah berhasil membuat data
        return $this->getResource()::getUrl('index');
    }
}
