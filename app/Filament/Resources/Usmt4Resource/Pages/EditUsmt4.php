<?php

namespace App\Filament\Resources\Usmt4Resource\Pages;

use App\Filament\Resources\Usmt4Resource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditUsmt4 extends EditRecord
{
    protected static string $resource = Usmt4Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
