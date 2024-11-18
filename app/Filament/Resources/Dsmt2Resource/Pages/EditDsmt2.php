<?php

namespace App\Filament\Resources\Dsmt2Resource\Pages;

use App\Filament\Resources\Dsmt2Resource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDsmt2 extends EditRecord
{
    protected static string $resource = Dsmt2Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
