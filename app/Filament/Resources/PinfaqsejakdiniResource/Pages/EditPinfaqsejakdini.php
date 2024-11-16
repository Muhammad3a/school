<?php

namespace App\Filament\Resources\PinfaqsejakdiniResource\Pages;

use App\Filament\Resources\PinfaqsejakdiniResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPinfaqsejakdini extends EditRecord
{
    protected static string $resource = PinfaqsejakdiniResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
