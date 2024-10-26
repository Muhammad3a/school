<?php

namespace App\Filament\Resources\BindoResource\Pages;

use App\Filament\Resources\BindoResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBindos extends ListRecords
{
    protected static string $resource = BindoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
