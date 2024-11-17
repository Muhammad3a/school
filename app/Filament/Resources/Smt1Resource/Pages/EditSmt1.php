<?php

namespace App\Filament\Resources\Smt1Resource\Pages;

use App\Filament\Resources\Smt1Resource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSmt1 extends EditRecord
{
    protected static string $resource = Smt1Resource::class;

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
