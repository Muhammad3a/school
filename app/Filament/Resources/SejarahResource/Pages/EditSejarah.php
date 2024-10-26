<?php

namespace App\Filament\Resources\SejarahResource\Pages;

use App\Filament\Resources\SejarahResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSejarah extends EditRecord
{
    protected static string $resource = SejarahResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
