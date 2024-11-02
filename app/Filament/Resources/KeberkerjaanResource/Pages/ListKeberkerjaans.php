<?php

namespace App\Filament\Resources\KeberkerjaanResource\Pages;

use App\Filament\Resources\KeberkerjaanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKeberkerjaans extends ListRecords
{
    protected static string $resource = KeberkerjaanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
