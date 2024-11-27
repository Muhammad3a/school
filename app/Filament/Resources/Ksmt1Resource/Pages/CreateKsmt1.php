<?php

namespace App\Filament\Resources\Ksmt1Resource\Pages;

use App\Filament\Resources\Ksmt1Resource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateKsmt1 extends CreateRecord
{
    protected static string $resource = Ksmt1Resource::class;

    protected function getRedirectUrl(): string
    {
        // Mengarahkan ke halaman daftar setelah berhasil membuat data
        return $this->getResource()::getUrl('index');
    }
}
