<?php

namespace App\Filament\Resources\PklResource\Pages;

use App\Filament\Resources\PklResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPkls extends ListRecords
{
    protected static string $resource = PklResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
