<?php

namespace App\Filament\Resources\Dk3Resource\Pages;

use App\Filament\Resources\Dk3Resource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateDk3 extends CreateRecord
{
    protected static string $resource = Dk3Resource::class;

    protected function getRedirectUrl(): string
    {
        // Mengarahkan ke halaman daftar setelah berhasil membuat data
        return $this->getResource()::getUrl('index');
    }
}
