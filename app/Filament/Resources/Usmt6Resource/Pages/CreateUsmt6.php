<?php

namespace App\Filament\Resources\Usmt6Resource\Pages;

use App\Filament\Resources\Usmt6Resource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateUsmt6 extends CreateRecord
{
    protected static string $resource = Usmt6Resource::class;

    protected function getRedirectUrl(): string
    {
        // Mengarahkan ke halaman daftar setelah berhasil membuat data
        return $this->getResource()::getUrl('index');
    }
}
