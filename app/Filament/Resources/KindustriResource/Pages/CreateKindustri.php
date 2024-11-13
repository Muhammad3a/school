<?php

namespace App\Filament\Resources\KindustriResource\Pages;

use App\Filament\Resources\KindustriResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateKindustri extends CreateRecord
{
    protected static string $resource = KindustriResource::class;

    protected function getRedirectUrl(): string
    {
        // Mengarahkan ke halaman daftar setelah berhasil membuat data
        return $this->getResource()::getUrl('index');
    }
}
