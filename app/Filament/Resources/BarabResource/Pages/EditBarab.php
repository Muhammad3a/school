<?php

namespace App\Filament\Resources\BarabResource\Pages;

use App\Filament\Resources\BarabResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBarab extends EditRecord
{
    protected static string $resource = BarabResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
