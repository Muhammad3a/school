<?php

namespace App\Filament\Resources\JengkeResource\Pages;

use App\Filament\Resources\JengkeResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateJengke extends CreateRecord
{
    protected static string $resource = JengkeResource::class;

    protected function getRedirectUrl(): string
    {
        // Mengarahkan ke halaman daftar setelah berhasil membuat data
        return $this->getResource()::getUrl('index');
    }
}
