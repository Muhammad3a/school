<?php

namespace App\Filament\Resources\Ksmt2Resource\Pages;

use App\Filament\Resources\Ksmt2Resource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateKsmt2 extends CreateRecord
{
    protected static string $resource = Ksmt2Resource::class;

    protected function getRedirectUrl(): string
    {
        // Mengarahkan ke halaman daftar setelah berhasil membuat data
        return $this->getResource()::getUrl('index');
    }
}
