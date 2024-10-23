<?php

namespace App\Filament\Resources\PelajaranKejuruanResource\Pages;

use App\Filament\Resources\PelajaranKejuruanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPelajaranKejuruan extends EditRecord
{
    protected static string $resource = PelajaranKejuruanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
