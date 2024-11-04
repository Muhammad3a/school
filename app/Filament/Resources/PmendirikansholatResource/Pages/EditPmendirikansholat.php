<?php

namespace App\Filament\Resources\PmendirikansholatResource\Pages;

use App\Filament\Resources\PmendirikansholatResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPmendirikansholat extends EditRecord
{
    protected static string $resource = PmendirikansholatResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
