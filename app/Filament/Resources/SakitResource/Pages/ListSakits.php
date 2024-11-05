<?php

namespace App\Filament\Resources\SakitResource\Pages;

use App\Filament\Resources\SakitResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSakits extends ListRecords
{
    protected static string $resource = SakitResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
