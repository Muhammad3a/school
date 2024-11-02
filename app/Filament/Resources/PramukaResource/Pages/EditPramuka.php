<?php

namespace App\Filament\Resources\PramukaResource\Pages;

use App\Filament\Resources\PramukaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPramuka extends EditRecord
{
    protected static string $resource = PramukaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
