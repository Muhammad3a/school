<?php

namespace App\Filament\Resources\Dsmt1Resource\Pages;

use App\Filament\Resources\Dsmt1Resource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDsmt1 extends EditRecord
{
    protected static string $resource = Dsmt1Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
