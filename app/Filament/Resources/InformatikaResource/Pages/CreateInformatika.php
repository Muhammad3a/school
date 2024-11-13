<?php

namespace App\Filament\Resources\InformatikaResource\Pages;

use App\Filament\Resources\InformatikaResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateInformatika extends CreateRecord
{
    protected static string $resource = InformatikaResource::class;

    protected function getRedirectUrl(): string
    {
        // Mengarahkan ke halaman daftar setelah berhasil membuat data
        return $this->getResource()::getUrl('index');
    }
}
