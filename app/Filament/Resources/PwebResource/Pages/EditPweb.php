<?php

namespace App\Filament\Resources\PwebResource\Pages;

use App\Filament\Resources\PwebResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPweb extends EditRecord
{
    protected static string $resource = PwebResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
