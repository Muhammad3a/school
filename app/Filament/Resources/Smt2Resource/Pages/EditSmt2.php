<?php

namespace App\Filament\Resources\Smt2Resource\Pages;

use App\Filament\Resources\Smt2Resource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSmt2 extends EditRecord
{
    protected static string $resource = Smt2Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
