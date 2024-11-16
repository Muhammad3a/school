<?php

namespace App\Filament\Resources\PmendirikansholatResource\Pages;

use App\Filament\Resources\PmendirikansholatResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPmendirikansholats extends ListRecords
{
    protected static string $resource = PmendirikansholatResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
