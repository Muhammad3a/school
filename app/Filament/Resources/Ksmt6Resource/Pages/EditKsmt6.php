<?php

namespace App\Filament\Resources\Ksmt6Resource\Pages;

use App\Filament\Resources\Ksmt6Resource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKsmt6 extends EditRecord
{
    protected static string $resource = Ksmt6Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
