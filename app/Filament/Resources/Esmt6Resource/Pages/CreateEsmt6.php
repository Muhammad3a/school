<?php

namespace App\Filament\Resources\Esmt6Resource\Pages;

use App\Filament\Resources\Esmt6Resource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateEsmt6 extends CreateRecord
{
    protected static string $resource = Esmt6Resource::class;

    protected function getRedirectUrl(): string
    {
        // Mengarahkan ke halaman daftar setelah berhasil membuat data
        return $this->getResource()::getUrl('index');
    }
}
