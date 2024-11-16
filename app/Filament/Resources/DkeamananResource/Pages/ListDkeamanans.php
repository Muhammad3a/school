<?php

namespace App\Filament\Resources\DkeamananResource\Pages;

use App\Filament\Resources\DkeamananResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDkeamanans extends ListRecords
{
    protected static string $resource = DkeamananResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
