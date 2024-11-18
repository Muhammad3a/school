<?php

namespace App\Filament\Resources\Psmt2Resource\Pages;

use App\Filament\Resources\Psmt2Resource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPsmt2 extends EditRecord
{
    protected static string $resource = Psmt2Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
