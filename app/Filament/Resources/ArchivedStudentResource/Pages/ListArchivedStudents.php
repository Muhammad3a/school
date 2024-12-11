<?php

namespace App\Filament\Resources\ArchivedStudentResource\Pages;

use App\Filament\Resources\ArchivedStudentResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListArchivedStudents extends ListRecords
{
    protected static string $resource = ArchivedStudentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
