<?php

namespace App\Filament\Resources\PemturResource\Pages;

use App\Filament\Resources\PemturResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPemtur extends EditRecord
{
    protected static string $resource = PemturResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
