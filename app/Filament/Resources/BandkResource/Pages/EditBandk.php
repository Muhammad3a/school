<?php

namespace App\Filament\Resources\BandkResource\Pages;

use App\Filament\Resources\BandkResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBandk extends EditRecord
{
    protected static string $resource = BandkResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
