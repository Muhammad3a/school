<?php

namespace App\Filament\Resources\KAmuliaResource\Pages;

use App\Filament\Resources\KAmuliaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKAmulia extends EditRecord
{
    protected static string $resource = KAmuliaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
