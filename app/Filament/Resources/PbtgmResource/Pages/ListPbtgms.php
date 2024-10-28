<?php

namespace App\Filament\Resources\PbtgmResource\Pages;

use App\Filament\Resources\PbtgmResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPbtgms extends ListRecords
{
    protected static string $resource = PbtgmResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
