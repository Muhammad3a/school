<?php

namespace App\Filament\Resources\Cps4Resource\Pages;

use App\Filament\Resources\Cps4Resource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCps4 extends EditRecord
{
    protected static string $resource = Cps4Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
