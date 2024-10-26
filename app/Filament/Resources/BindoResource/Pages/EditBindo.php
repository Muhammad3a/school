<?php

namespace App\Filament\Resources\BindoResource\Pages;

use App\Filament\Resources\BindoResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBindo extends EditRecord
{
    protected static string $resource = BindoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
