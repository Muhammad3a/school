<?php

namespace App\Filament\Resources\Psmt6Resource\Pages;

use App\Filament\Resources\Psmt6Resource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPsmt6 extends EditRecord
{
    protected static string $resource = Psmt6Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
