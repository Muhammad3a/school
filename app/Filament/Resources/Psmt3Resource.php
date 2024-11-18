<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Psmt3;
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
use App\Filament\Resources\Psmt3Resource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\Psmt3Resource\RelationManagers;

class Psmt3Resource extends Resource
{
    protected static ?string $model = Psmt3::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

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
                        TextInput::make('bpot'),
                        TextInput::make('bmuslim'),
                        TextInput::make('mabsaai'),
                        TextInput::make('mma'),
                        TextInput::make('mkdl'),
                        TextInput::make('msfss'),
                        TextInput::make('mtck'),
                        TextInput::make('tmisd'),
                        TextInput::make('mswss'),
                        TextInput::make('cta'),
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
            TextColumn::make('pai')
            ->label('Pendidikan Agama Islam'),
            TextColumn::make('bpot'),
            TextColumn::make('bmuslim'),
            TextColumn::make('mabsaai'),
            TextColumn::make('mma'),
            TextColumn::make('mkdl'),
            TextColumn::make('msfss'),
            TextColumn::make('mtck'),
            TextColumn::make('tmisd'),
            TextColumn::make('mswss'),
            TextColumn::make('cta'),
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

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPsmt3s::route('/'),
            'create' => Pages\CreatePsmt3::route('/create'),
            'edit' => Pages\EditPsmt3::route('/{record}/edit'),
        ];
    }
}
