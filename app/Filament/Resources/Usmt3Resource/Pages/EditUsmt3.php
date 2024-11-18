<?php

namespace App\Filament\Resources\Usmt3Resource\Pages;

use App\Filament\Resources\Usmt3Resource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditUsmt3 extends EditRecord
{
    protected static string $resource = Usmt3Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
