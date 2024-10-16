<?php

namespace App\Filament\Resources\StudentHasClassResource\Pages;

use App\Filament\Resources\StudentHasClassResource;
use App\Models\HomeRoom;
use App\Models\Priode;
use App\Models\Student;
use App\Models\StudentHasClass;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Select;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Resources\Pages\Page;

class FormStudentClass extends Page implements HasForms
{
    use InteractsWithForms;

    protected static string $resource = StudentHasClassResource::class;

    protected static string $view = 'filament.resources.student-has-class-resource.pages.form-student-class';

    public $students = [];
    public $homerooms = '';
    public $priode = '';

    function mount(): void
    {
        $this->form->fill();
    }

    function getFormSchema(): array
    {
        return [
            Card::make()
                ->schema([
                    Select::make('students')
                        ->multiple()
                        ->label('Name Student')
                        ->options(Student::all()->pluck('name', 'id'))
                        ->columnSpan(3),

                    Select::make('homerooms')
                        ->options(HomeRoom::all()->pluck('classroom.name', 'id'))
                        ->label('Class'),
                    Select::make('priode')
                        ->label('Periode')
                        ->searchable()
                        ->options(Priode::all()->pluck('name', 'id'))
                ])->columns(3)
        ];
    }

    function save()
    {
        $students = $this->students;
        $insert = [];
        foreach ($students as $row) {
            array_push($insert, [
                'students_id' => $row,
                'homerooms_id' => $this->homerooms,
                'priode_id' => $this->priode,
                'is_open' => 1
            ]);
        }
        StudentHasClass::insert($insert);

        return redirect()->to('admin/student-has-classes');
    }
}
