<?php

namespace App\Filament\Resources\KAmuliaResource\Pages;

use App\Filament\Resources\KAmuliaResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateKAmulia extends CreateRecord
{
    protected static string $resource = KAmuliaResource::class;

    protected function getRedirectUrl(): string
    {
        // Mengarahkan ke halaman daftar setelah berhasil membuat data
        return $this->getResource()::getUrl('index');
    }
}
