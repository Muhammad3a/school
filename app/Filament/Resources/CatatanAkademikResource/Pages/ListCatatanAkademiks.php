<?php

namespace App\Filament\Resources\CatatanAkademikResource\Pages;

use App\Filament\Resources\CatatanAkademikResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCatatanAkademiks extends ListRecords
{
    protected static string $resource = CatatanAkademikResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
