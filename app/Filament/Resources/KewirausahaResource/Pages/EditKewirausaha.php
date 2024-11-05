<?php

namespace App\Filament\Resources\KewirausahaResource\Pages;

use App\Filament\Resources\KewirausahaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKewirausaha extends EditRecord
{
    protected static string $resource = KewirausahaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
