<?php

namespace App\Filament\Resources\BsundaResource\Pages;

use App\Filament\Resources\BsundaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBsunda extends EditRecord
{
    protected static string $resource = BsundaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
