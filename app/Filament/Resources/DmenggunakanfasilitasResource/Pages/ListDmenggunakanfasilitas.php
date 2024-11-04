<?php

namespace App\Filament\Resources\DmenggunakanfasilitasResource\Pages;

use App\Filament\Resources\DmenggunakanfasilitasResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDmenggunakanfasilitas extends ListRecords
{
    protected static string $resource = DmenggunakanfasilitasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
