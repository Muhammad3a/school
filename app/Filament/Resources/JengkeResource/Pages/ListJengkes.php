<?php

namespace App\Filament\Resources\JengkeResource\Pages;

use App\Filament\Resources\JengkeResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListJengkes extends ListRecords
{
    protected static string $resource = JengkeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
