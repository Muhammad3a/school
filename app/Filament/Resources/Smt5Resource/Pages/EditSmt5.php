<?php

namespace App\Filament\Resources\Smt5Resource\Pages;

use App\Filament\Resources\Smt5Resource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSmt5 extends EditRecord
{
    protected static string $resource = Smt5Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
