<?php

namespace App\Filament\Resources\Dsmt5Resource\Pages;

use App\Filament\Resources\Dsmt5Resource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDsmt5 extends EditRecord
{
    protected static string $resource = Dsmt5Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
