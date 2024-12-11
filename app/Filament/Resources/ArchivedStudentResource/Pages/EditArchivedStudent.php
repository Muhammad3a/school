<?php

namespace App\Filament\Resources\ArchivedStudentResource\Pages;

use App\Filament\Resources\ArchivedStudentResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditArchivedStudent extends EditRecord
{
    protected static string $resource = ArchivedStudentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
