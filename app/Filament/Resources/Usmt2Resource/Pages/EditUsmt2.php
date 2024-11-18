<?php

namespace App\Filament\Resources\Usmt2Resource\Pages;

use App\Filament\Resources\Usmt2Resource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditUsmt2 extends EditRecord
{
    protected static string $resource = Usmt2Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
