<?php

namespace App\Filament\Resources\StudentResource\Pages;

use Filament\Actions;
use Illuminate\Contracts\View\View;
use Filament\Resources\Pages\ListRecords;
use Filament\Resources\Pages\ListRecords\Tab;
use App\Filament\Resources\StudentResource;
use App\Imports\ImportStudents;
use App\Models\Student;
use Filament\Forms\Components\Builder;
use Maatwebsite\Excel\Facades\Excel;

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
        if ($this->file != '') {
            Excel::import(new ImportStudents, $this->file);
        }
        // Student::create([
        //     'nis' => '123',
        //     'name' => 'Try First',
        //     'gender' => 'Male'
        // ]);
    }
    // function getTabs(): array
    // {
    //     return [
    //         'all' => Tab::make(),
    //         'accept' => Tab::make()
    //             ->modifyQueryUsing(fn(Builder $query) => $query->where('status', 'accept')),
    //         'off' => Tab::make()
    //             ->modifyQueryUsing(fn(Builder $query) => $query->where('status', 'off'))
    //     ];
    // }
    function getTabs(): array
    {
        return [
            'all' => Tab::make(),
            'accept' => Tab::make()
                // Ubah `Filament\Forms\Components\Builder` menjadi `Illuminate\Database\Eloquent\Builder`
                ->modifyQueryUsing(fn(\Illuminate\Database\Eloquent\Builder $query) => $query->where('status', 'accept')),
            'off' => Tab::make()
                // Ubah `Filament\Forms\Components\Builder` menjadi `Illuminate\Database\Eloquent\Builder`
                ->modifyQueryUsing(fn(\Illuminate\Database\Eloquent\Builder $query) => $query->where('status', 'off'))
        ];
    }
}
