<?php

namespace App\Filament\Resources\StudentResource\Pages;

use App\Filament\Resources\StudentResource;
use Filament\Actions;
use Filament\Resources\Pages\viewRecord;

class ViewStudent extends viewRecord
{
    protected static string $resource = StudentResource::class;

    protected static string $view = 'filament.resources.students.view';
}
