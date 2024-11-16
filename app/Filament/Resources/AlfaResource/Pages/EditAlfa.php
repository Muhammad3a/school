<?php

namespace App\Filament\Resources\AlfaResource\Pages;

use App\Filament\Resources\AlfaResource;
use Filament\Actions;
use Filament\Actions\Action;
use Filament\Resources\Pages\EditRecord;

class EditAlfa extends EditRecord
{
    protected static string $resource = AlfaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    // protected function getSaveFormAction(): Action
    // {
    //     return Action::make('save')
    //         ->disabled(function (): bool {
    //             return $this->data['1'] > 100 ? true : false;
    //         });
    // }
}
