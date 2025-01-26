<?php

namespace App\Filament\Resources\TandaTanganResource\Pages;

use App\Filament\Resources\TandaTanganResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTandaTangans extends ListRecords
{
    protected static string $resource = TandaTanganResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
