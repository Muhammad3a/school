<?php

namespace App\Filament\Resources\JengkeResource\Pages;

use App\Filament\Resources\JengkeResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditJengke extends EditRecord
{
    protected static string $resource = JengkeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
