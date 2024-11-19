<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Dsmt4;
use App\Models\Student;
use Filament\Forms\Form;
use App\Models\Classroom;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\Dsmt4Resource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\Dsmt4Resource\RelationManagers;

class Dsmt4Resource extends Resource
{
    protected static ?string $model = Dsmt4::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationLabel = 'Nilai Disiplin Semester 4';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                ->schema([
                    Select::make('student_id')
                        ->options(Student::all()->pluck('name', 'id'))
                        ->label('Murid'),
                    Select::make('classroom_id')
                        ->options(Classroom::all()->pluck('name', 'id'))
                        ->label('Kelas'),
                        TextInput::make('dwaktu')
                        ->label('Disiplin Waktu'),
                        TextInput::make('dibadah')
                        ->label('Disiplin Ibadah'),
                        TextInput::make('dbelajar')
                        ->label('Disiplin Belajar'),
                        TextInput::make('dbergaul')
                        ->label('Disiplin Bergaul'),
                        TextInput::make('dberbusana')
                        ->label('Disiplin Berbusana'),
                        TextInput::make('dmenggunakanfasilitas')
                        ->label('Disiplin Menggunakan Fasilitas'),
                        TextInput::make('dk3')
                        ->label('dk3'),
                        TextInput::make('dberbahasa')
                        ->label('Disiplin Berbahasa'),
                         TextInput::make('dbertindak')
                         ->label('Bertindak & Menindak'),
                        TextInput::make('dkeamanan')
                        ->label('Disiplin Keamanan'),
                        ])->columns(2)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('student.name')
                ->label('Murid'),
            TextColumn::make('classroom.name')
                ->label('Kelas'),
            TextColumn::make('dwaktu')
            ->label('Disiplin Waktu'),
            TextColumn::make('dibadah')
            ->label('Disiplin Ibadah'),
            TextColumn::make('dbelajar')
            ->label('Disiplin Belajar'),
            TextColumn::make('dbergaul')
            ->label('Disiplin Bergaul'),
            TextColumn::make('dberbusana')
            ->label('Disiplin Berbusana'),
            TextColumn::make('dmenggunakanfasilitas')
            ->label('Disiplin Menggunakan Fasilitas'),
            TextColumn::make('dk3')
            ->label('dk3'),
            TextColumn::make('dberbahasa')
            ->label('Disiplin Berbahasa'),
            TextColumn::make('dbertindak')
            ->label('Bertindak & Menindak'),
            TextColumn::make('dkeamanan')
            ->label('Disiplin Keamanan'),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('classroom_id')
                ->options(Classroom::all()->pluck('name', 'id'))
                ->label('Filter Kelas'),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public  static function getLabel(): ?string
    {
        $locale = app()->getLocale();

        if ($locale == 'id') {
            return "Nilai 10 Disiplin Semester 4";
        } else
            return "Teacher";
    }
}

