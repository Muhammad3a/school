<?php

namespace App\Filament\Resources\Dk3Resource\Pages;

use App\Filament\Resources\Dk3Resource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDk3 extends EditRecord
{
    protected static string $resource = Dk3Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
