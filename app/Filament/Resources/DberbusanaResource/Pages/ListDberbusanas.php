<?php

namespace App\Filament\Resources\DberbusanaResource\Pages;

use App\Filament\Resources\DberbusanaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDberbusanas extends ListRecords
{
    protected static string $resource = DberbusanaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}