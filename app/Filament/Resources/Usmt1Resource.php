<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Usmt1;
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
use App\Filament\Resources\Usmt1Resource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\Usmt1Resource\RelationManagers;

class Usmt1Resource extends Resource
{
    protected static ?string $model = Usmt1::class;

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
                        TextInput::make('mtk'),
                        TextInput::make('inggris'),
                        TextInput::make('informatika'),
                        TextInput::make('fisika'),
                        TextInput::make('kimia'),
                        TextInput::make('bisnis'),
                        TextInput::make('profesi'),
                        TextInput::make('pemtur'),
                        TextInput::make('pbo'),
                        TextInput::make('gim'),
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
            TextColumn::make('mtk'),
            TextColumn::make('inggris'),
            TextColumn::make('informatika'),
            TextColumn::make('fisika'),
            TextColumn::make('kimia'),
            TextColumn::make('bisnis'),
            TextColumn::make('profesi'),
            TextColumn::make('pemtur'),
            TextColumn::make('pbo'),
            TextColumn::make('gim'),
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
            'index' => Pages\ListUsmt1s::route('/'),
            'create' => Pages\CreateUsmt1::route('/create'),
            'edit' => Pages\EditUsmt1::route('/{record}/edit'),
        ];
    }
}
