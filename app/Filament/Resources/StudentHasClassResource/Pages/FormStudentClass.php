<?php

namespace App\Filament\Resources\StudentHasClassResource\Pages;

use App\Models\Priode;
use App\Models\Student;
use App\Models\HomeRoom;
use App\Models\Classroom;
use App\Models\StudentHasClass;
use Filament\Resources\Pages\Page;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Select;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Concerns\InteractsWithForms;
use App\Filament\Resources\StudentHasClassResource;
use App\Models\Departement;

class FormStudentClass extends Page implements HasForms
{
    use InteractsWithForms;

    protected static string $resource = StudentHasClassResource::class;

    protected static string $view = 'filament.resources.student-has-class-resource.pages.form-student-class';

    public $students = [];
    public $classrooms = '';
    public $priode = '';
    public $departements = '';

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
                    Select::make('classrooms')
                        ->options(Classroom::all()->pluck('name', 'id'))
                        ->label('Class'),
                    Select::make('departements')
                        ->options(Departement::all()->pluck('name_department', 'id'))
                        ->label('Jurusan'),
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
                'classrooms_id' => $this->classrooms,
                'departements_id' => $this->departements,
                'priode_id' => $this->priode,
                'is_open' => 1
            ]);
        }
        StudentHasClass::insert($insert);

        return redirect()->to('admin/student-has-classes');
    }
}
