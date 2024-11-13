<?php

namespace App\Filament\Resources\BsundaResource\Pages;

use App\Filament\Resources\BsundaResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateBsunda extends CreateRecord
{
    protected static string $resource = BsundaResource::class;

    protected function getRedirectUrl(): string
    {
        // Mengarahkan ke halaman daftar setelah berhasil membuat data
        return $this->getResource()::getUrl('index');
    }
}
