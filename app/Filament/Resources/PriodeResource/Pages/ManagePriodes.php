<?php

namespace App\Filament\Resources\PriodeResource\Pages;

use App\Filament\Resources\PriodeResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;
use Illuminate\Contracts\Support\Htmlable;

class ManagePriodes extends ManageRecords
{
    protected static string $resource = PriodeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }


    public function getTitle(): string|Htmlable
    {

        return ('Periode');
    }
}
