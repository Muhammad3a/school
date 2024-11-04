<?php

namespace App\Filament\Resources\PmembacaalquranResource\Pages;

use App\Filament\Resources\PmembacaalquranResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPmembacaalquran extends EditRecord
{
    protected static string $resource = PmembacaalquranResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
