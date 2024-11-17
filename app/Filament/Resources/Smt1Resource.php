<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\Smt1;
use Filament\Tables;
use App\Models\Student;
use Filament\Forms\Form;
use App\Models\Classroom;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\Smt1Resource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\Smt1Resource\RelationManagers;

class Smt1Resource extends Resource
{
    protected static ?string $model = Smt1::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationLabel = 'Semester 1';

    public static function shouldRegisterNavigation(): bool
    {
        return auth()->user()->hasRole('wali kelas');
    }

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
                        TextInput::make('pai')
                            ->label('Pendidikan Agama Islam'),
                        TextInput::make('pp')
                            ->label('Pendidikan Pancasila'),
                        TextInput::make('indo')
                            ->label('Bahasa Indonesia'),
                        TextInput::make('pjok')
                            ->label('Pendidikan Jasmani Olahraga dan Kesehatan'),
                        TextInput::make('sejarah')
                            ->label('Sejarah'),
                        TextInput::make('sb')
                            ->label('Seni Budaya'),
                        TextInput::make('sunda')
                            ->label('Bahasa Sunda'),
                        TextInput::make('arab')
                            ->label('Bahasa Arab'),
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
                TextColumn::make('pai'),
                TextColumn::make('pp'),
                TextColumn::make('indo'),
                TextColumn::make('pjok'),
                TextColumn::make('sejarah'),
                TextColumn::make('sb'),
                TextColumn::make('sunda'),
                TextColumn::make('arab'),
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
            'index' => Pages\ListSmt1s::route('/'),
            'create' => Pages\CreateSmt1::route('/create'),
            'edit' => Pages\EditSmt1::route('/{record}/edit'),
        ];
    }
}
