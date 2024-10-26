<?php

namespace App\Filament\Resources\PplResource\Pages;

use App\Filament\Resources\PplResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPpls extends ListRecords
{
    protected static string $resource = PplResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
