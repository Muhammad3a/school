<?php

namespace App\Filament\Resources\PramadhanResource\Pages;

use App\Filament\Resources\PramadhanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPramadhan extends EditRecord
{
    protected static string $resource = PramadhanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
