<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Esmt4;
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
use App\Filament\Resources\Esmt4Resource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\Esmt4Resource\RelationManagers;

class Esmt4Resource extends Resource
{
    protected static ?string $model = Esmt4::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationLabel = 'Nilai Eskul Semester 4';


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
                        TextInput::make('pramuka')
                        ->label('Pramuka'),
                        TextInput::make('kesenian')
                        ->label('Kesenian'),
                        TextInput::make('pramadan')
                        ->label('Pesantren Ramadhan'),
                        TextInput::make('okesehatan')
                        ->label('Olahraga & Kesehatan'),
                        TextInput::make('kmulia')
                        ->label('Keagamaan & Akhlak Mulia'),
                        TextInput::make('bkerja')
                        ->label('Budaya Kerja'),
                        TextInput::make('kewirausahaan')
                        ->label('Kewirausaan'),
                        TextInput::make('berekayasa')
                        ->label('Berekayasa & Berteknologi'),
                       TextInput::make('kebekerjaan')
                       ->label('Keberkerjaan'),
                       TextInput::make('sakit')
                       ->label('Sakit'),
                       TextInput::make('izin')
                       ->label('Izin'),
                       TextInput::make('Alfa')
                       ->label('Alfa'),
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
            TextColumn::make('pramuka')
            ->label('Pramuka'),
            TextColumn::make('kesenian')
            ->label('Kesenian'),
            TextColumn::make('pramadan')
            ->label('Pesantren Ramadhan'),
            TextColumn::make('okesehatan')
            ->label('Olahraga & Kesehatan'),
            TextColumn::make('kmulia')
            ->label('Keagamaan & Akhlak Mulia'),
            TextColumn::make('bkerja')
            ->label('Budaya Kerja'),
            TextColumn::make('kewirausahaan')
            ->label('Kewirausaan'),
          TextColumn::make('berekayasa')
            ->label('Berekayasa & Berteknologi'),
            TextColumn::make('kebekerjaan')
            ->label('Keberkerjaan'),
            TextColumn::make('sakit')
            ->label('Sakit'),
            TextColumn::make('izin')
            ->label('Izin'),
            TextColumn::make('alfa')
            ->label('Alfa'),
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
            return "Nilai Ledger D Eskul,p5k,Presensi Semester 4";
        } else
            return "Teacher";
    }
}
