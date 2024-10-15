<?php

namespace App\Filament\Resources\StudentResource\Pages;

use Filament\Actions;
use Illuminate\Contracts\View\View;
use Filament\Resources\Pages\ListRecords;
use App\Filament\Resources\StudentResource;
use App\Models\Student;

class ListStudents extends ListRecords
{
    protected static string $resource = StudentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    function getHeader(): ?View
    {
        $data =  Actions\CreateAction::make();
        return view('filament.custom.upload-file', compact('data'));
    }

    public $file = '';

    function save()
    {
        Student::create([
            'nis' => '123',
            'name' => 'Try First',
            'gender' => 'Male'
        ]);
    }
}
