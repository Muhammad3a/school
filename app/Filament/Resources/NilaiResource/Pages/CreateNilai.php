<?php

namespace App\Filament\Resources\NilaiResource\Pages;

use Closure;
use App\Models\Nilai;
use Filament\Actions;
use App\Models\Priode;
use App\Models\Student;
use App\Models\Subject;
use Filament\Forms\Get;
use Filament\Forms\Form;
use App\Models\Classroom;
use App\Models\CategoryNilai;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use App\Filament\Resources\NilaiResource;
use Filament\Resources\Pages\CreateRecord;

class CreateNilai extends CreateRecord
{
    protected static string $resource = NilaiResource::class;

    protected static string $view = 'filament.resources.nilai-resource.pages.form-nilai';

    public function form(Form $form): Form
    {
        return $form->schema([
            Card::make()
                ->schema([
                    Card::make()
                        ->schema([
                            Select::make('classrooms')
                                ->options(Classroom::all()->pluck('name', 'id')->toArray())
                                ->label('Kelas'),
                            Select::make('priode')
                                ->label('Periode')
                                ->searchable()
                                ->options(Priode::all()->pluck('name', 'id')->toArray()),
                            Select::make('subject_id')
                                ->label('Pelajaran')
                                ->searchable()
                                ->options(Subject::all()->pluck('name', 'id')->toArray()),
                            Select::make('category_nilai')
                                ->label('Kategori Nilai')
                                ->searchable()
                                ->options(CategoryNilai::all()->pluck('name', 'id')->toArray())
                                ->columns(3),
                        ])->columns(3),

                    Repeater::make('nilaistudents')
                        ->label('Grade')
                        ->schema([
                            Select::make('student')
                                ->searchable()
                                ->options(Student::all()->pluck('name', 'id')->toArray())
                                ->label('Student'),

                            TextInput::make('nilai')
                                ->rules([
                                    fn(Get $get): Closure => function (String $attribute, $value, Closure $fail) use ($get) {
                                        if ($get('nilai') > 100) {
                                            $fail('Nilai terlalu besar');
                                        }
                                    }
                                ])->validationAttribute('nilai')
                        ])->columns(2)
                ])
        ]);
    }

    public function save()
    {
        $get = $this->form->getState();

        $insert = [];
        foreach ($get['nilaistudents'] as $row) {
            array_push($insert, [
                'class_id' => $get['classrooms'],
                'student_id' => $row['student'],
                'priode_id' => $get['priode'],
                'teacher_id' => auth()->user()->id,
                'subject_id' => $get['subject_id'],
                'category_nilai_id' => $get['category_nilai'],
                'nilai' => $row['nilai']
            ]);
        }

        Nilai::insert($insert);

        return redirect()->to('admin/nilais');
    }
}
