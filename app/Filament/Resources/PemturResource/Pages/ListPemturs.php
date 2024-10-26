<?php

namespace App\Filament\Resources\PemturResource\Pages;

use App\Filament\Resources\PemturResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPemturs extends ListRecords
{
    protected static string $resource = PemturResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
