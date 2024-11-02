<?php

namespace App\Filament\Resources\PramukaResource\Pages;

use App\Filament\Resources\PramukaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPramukas extends ListRecords
{
    protected static string $resource = PramukaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
