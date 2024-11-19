<?php

namespace App\Filament\Resources\Cps2Resource\Pages;

use App\Filament\Resources\Cps2Resource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCps2 extends EditRecord
{
    protected static string $resource = Cps2Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
