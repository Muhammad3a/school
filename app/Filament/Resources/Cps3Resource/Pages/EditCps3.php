<?php

namespace App\Filament\Resources\Cps3Resource\Pages;

use App\Filament\Resources\Cps3Resource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCps3 extends EditRecord
{
    protected static string $resource = Cps3Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
