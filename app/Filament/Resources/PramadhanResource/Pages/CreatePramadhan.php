<?php

namespace App\Filament\Resources\PramadhanResource\Pages;

use App\Filament\Resources\PramadhanResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePramadhan extends CreateRecord
{
    protected static string $resource = PramadhanResource::class;

    protected function getRedirectUrl(): string
    {
        // Mengarahkan ke halaman daftar setelah berhasil membuat data
        return $this->getResource()::getUrl('index');
    }
}
