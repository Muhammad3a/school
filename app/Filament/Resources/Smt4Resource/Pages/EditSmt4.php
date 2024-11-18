<?php

namespace App\Filament\Resources\Smt4Resource\Pages;

use App\Filament\Resources\Smt4Resource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSmt4 extends EditRecord
{
    protected static string $resource = Smt4Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
