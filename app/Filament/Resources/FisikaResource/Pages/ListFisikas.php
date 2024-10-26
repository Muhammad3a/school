<?php

namespace App\Filament\Resources\FisikaResource\Pages;

use App\Filament\Resources\FisikaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFisikas extends ListRecords
{
    protected static string $resource = FisikaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
