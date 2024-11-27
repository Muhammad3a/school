<?php

namespace App\Filament\Resources\Psmt5Resource\Pages;

use App\Filament\Resources\Psmt5Resource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPsmt5 extends EditRecord
{
    protected static string $resource = Psmt5Resource::class;

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
