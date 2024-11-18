<?php

namespace App\Filament\Resources\Dsmt6Resource\Pages;

use App\Filament\Resources\Dsmt6Resource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDsmt6 extends EditRecord
{
    protected static string $resource = Dsmt6Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
