<?php

namespace App\Filament\Resources\Cps6Resource\Pages;

use App\Filament\Resources\Cps6Resource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCps6 extends EditRecord
{
    protected static string $resource = Cps6Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
