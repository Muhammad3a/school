<?php

namespace App\Filament\Resources\Usmt5Resource\Pages;

use App\Filament\Resources\Usmt5Resource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditUsmt5 extends EditRecord
{
    protected static string $resource = Usmt5Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function getRedirectUrl(): string
    {
        // Mengarahkan ke halaman daftar setelah berhasil membuat data
        return $this->getResource()::getUrl('index');
    }
}
