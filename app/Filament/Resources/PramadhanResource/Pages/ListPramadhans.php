<?php

namespace App\Filament\Resources\PramadhanResource\Pages;

use App\Filament\Resources\PramadhanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPramadhans extends ListRecords
{
    protected static string $resource = PramadhanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
