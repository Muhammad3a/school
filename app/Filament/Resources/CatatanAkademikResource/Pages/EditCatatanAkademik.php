<?php

namespace App\Filament\Resources\CatatanAkademikResource\Pages;

use App\Filament\Resources\CatatanAkademikResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCatatanAkademik extends EditRecord
{
    protected static string $resource = CatatanAkademikResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
