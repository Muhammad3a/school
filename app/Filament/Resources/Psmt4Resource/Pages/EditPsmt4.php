<?php

namespace App\Filament\Resources\Psmt4Resource\Pages;

use App\Filament\Resources\Psmt4Resource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPsmt4 extends EditRecord
{
    protected static string $resource = Psmt4Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
