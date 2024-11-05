<?php

namespace App\Filament\Resources\KindustriResource\Pages;

use App\Filament\Resources\KindustriResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKindustri extends EditRecord
{
    protected static string $resource = KindustriResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
