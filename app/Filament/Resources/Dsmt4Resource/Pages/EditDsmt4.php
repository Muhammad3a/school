<?php

namespace App\Filament\Resources\Dsmt4Resource\Pages;

use App\Filament\Resources\Dsmt4Resource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDsmt4 extends EditRecord
{
    protected static string $resource = Dsmt4Resource::class;

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
