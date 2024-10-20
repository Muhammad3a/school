<?php

namespace App\Filament\Student\Resources\NilaiResource\Pages;

use App\Filament\Student\Resources\NilaiResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListNilais extends ListRecords
{
    protected static string $resource = NilaiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // Actions\CreateAction::make(),
        ];
    }
}
