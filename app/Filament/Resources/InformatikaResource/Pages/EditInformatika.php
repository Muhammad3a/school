<?php

namespace App\Filament\Resources\InformatikaResource\Pages;

use App\Filament\Resources\InformatikaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditInformatika extends EditRecord
{
    protected static string $resource = InformatikaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
