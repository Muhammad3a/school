<?php

namespace App\Filament\Resources\Psmt1Resource\Pages;

use App\Filament\Resources\Psmt1Resource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPsmt1 extends EditRecord
{
    protected static string $resource = Psmt1Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
