<?php

namespace App\Filament\Resources\SejarahResource\Pages;

use App\Filament\Resources\SejarahResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateSejarah extends CreateRecord
{
    protected static string $resource = SejarahResource::class;

    protected function getRedirectUrl(): string
    {
        // Mengarahkan ke halaman daftar setelah berhasil membuat data
        return $this->getResource()::getUrl('index');
    }
}
