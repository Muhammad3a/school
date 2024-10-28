<?php

namespace App\Filament\Resources\KbResource\Pages;

use App\Filament\Resources\KbResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKbs extends ListRecords
{
    protected static string $resource = KbResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
