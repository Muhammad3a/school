<?php

namespace App\Filament\Resources\PelajaranKejuruanResource\Pages;

use App\Filament\Resources\PelajaranKejuruanResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePelajaranKejuruan extends CreateRecord
{
    protected static string $resource = PelajaranKejuruanResource::class;

    protected function getRedirectUrl(): string
    {
        // Mengarahkan ke halaman daftar setelah berhasil membuat data
        return $this->getResource()::getUrl('index');
    }
}
