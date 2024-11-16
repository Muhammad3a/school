<?php

namespace App\Filament\Resources\BindoResource\Pages;

use App\Filament\Resources\BindoResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateBindo extends CreateRecord
{
    protected static string $resource = BindoResource::class;

    protected function getRedirectUrl(): string
    {
        // Mengarahkan ke halaman daftar setelah berhasil membuat data
        return $this->getResource()::getUrl('index');
    }
}
