<?php

namespace App\Filament\Resources\Ksmt4Resource\Pages;

use App\Filament\Resources\Ksmt4Resource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKsmt4 extends EditRecord
{
    protected static string $resource = Ksmt4Resource::class;

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
