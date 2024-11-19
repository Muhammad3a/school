<?php

namespace App\Filament\Resources\Cps5Resource\Pages;

use App\Filament\Resources\Cps5Resource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCps5 extends EditRecord
{
    protected static string $resource = Cps5Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
