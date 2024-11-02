<?php

namespace App\Filament\Resources\KesenianResource\Pages;

use App\Filament\Resources\KesenianResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKesenians extends ListRecords
{
    protected static string $resource = KesenianResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
