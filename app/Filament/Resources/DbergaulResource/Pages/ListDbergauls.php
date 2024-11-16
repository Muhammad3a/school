<?php

namespace App\Filament\Resources\DbergaulResource\Pages;

use App\Filament\Resources\DbergaulResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDbergauls extends ListRecords
{
    protected static string $resource = DbergaulResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
