<?php

namespace App\Filament\Resources\InformatikaResource\Pages;

use App\Filament\Resources\InformatikaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListInformatikas extends ListRecords
{
    protected static string $resource = InformatikaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
