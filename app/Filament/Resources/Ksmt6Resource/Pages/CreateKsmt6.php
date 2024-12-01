<?php

namespace App\Filament\Resources\Ksmt6Resource\Pages;

use App\Filament\Resources\Ksmt6Resource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateKsmt6 extends CreateRecord
{
    protected static string $resource = Ksmt6Resource::class;

    protected function getRedirectUrl(): string
    {
        // Mengarahkan ke halaman daftar setelah berhasil membuat data
        return $this->getResource()::getUrl('index');
    }
}
