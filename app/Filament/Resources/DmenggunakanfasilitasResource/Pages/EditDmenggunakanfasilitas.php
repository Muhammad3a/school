<?php

namespace App\Filament\Resources\DmenggunakanfasilitasResource\Pages;

use App\Filament\Resources\DmenggunakanfasilitasResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDmenggunakanfasilitas extends EditRecord
{
    protected static string $resource = DmenggunakanfasilitasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
