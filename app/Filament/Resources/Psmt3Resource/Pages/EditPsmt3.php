<?php

namespace App\Filament\Resources\Psmt3Resource\Pages;

use App\Filament\Resources\Psmt3Resource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPsmt3 extends EditRecord
{
    protected static string $resource = Psmt3Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
