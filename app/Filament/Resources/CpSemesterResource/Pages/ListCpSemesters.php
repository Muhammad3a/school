<?php

namespace App\Filament\Resources\CpSemesterResource\Pages;

use App\Filament\Resources\CpSemesterResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCpSemesters extends ListRecords
{
    protected static string $resource = CpSemesterResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
