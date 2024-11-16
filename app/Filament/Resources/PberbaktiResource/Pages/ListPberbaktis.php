<?php

namespace App\Filament\Resources\PberbaktiResource\Pages;

use App\Filament\Resources\PberbaktiResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPberbaktis extends ListRecords
{
    protected static string $resource = PberbaktiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
