<?php

namespace App\Filament\Resources\PmendirikansholatResource\Pages;

use App\Filament\Resources\PmendirikansholatResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePmendirikansholat extends CreateRecord
{
    protected static string $resource = PmendirikansholatResource::class;

    protected function getRedirectUrl(): string
    {
        // Mengarahkan ke halaman daftar setelah berhasil membuat data
        return $this->getResource()::getUrl('index');
    }
}
