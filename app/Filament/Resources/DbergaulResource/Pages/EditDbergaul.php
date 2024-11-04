<?php

namespace App\Filament\Resources\DbergaulResource\Pages;

use App\Filament\Resources\DbergaulResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDbergaul extends EditRecord
{
    protected static string $resource = DbergaulResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
