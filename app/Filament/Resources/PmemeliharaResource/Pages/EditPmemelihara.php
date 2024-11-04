<?php

namespace App\Filament\Resources\PmemeliharaResource\Pages;

use App\Filament\Resources\PmemeliharaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPmemelihara extends EditRecord
{
    protected static string $resource = PmemeliharaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
