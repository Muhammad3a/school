<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Usmt6;
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
use App\Filament\Resources\Usmt6Resource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\Usmt6Resource\RelationManagers;

class Usmt6Resource extends Resource
{
    protected static ?string $model = Usmt6::class;

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
                        TextInput::make('mtk')
                        ->label('Matematika'),
                        TextInput::make('inggris')
                        ->label('Bahasa Inggris'),
                        TextInput::make('informatika')
                        ->label('Informatika'),
                        TextInput::make('fisika')
                        ->label('Fisika'),
                        TextInput::make('kimia')
                        ->label('Kimia'),
                        TextInput::make('bisnis')
                        ->label('Proses Bisnis & K3LH'),
                        TextInput::make('profesi')
                        ->label('Profesi Dan Kewirausahaan'),
                        TextInput::make('pemtur')
                        ->label('Pemrograman Terstruktur'),
                        TextInput::make('pbo')
                        ->label('Pemrograman Berorientasi Objek'),
                        TextInput::make('gim')
                        ->label('Orientasi Dasar Pengembangan Perangkat Lunak Dan GIM'),
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
            TextColumn::make('mtk')
            ->label('Matematika'),
            TextColumn::make('inggris')
            ->label('Bahasa Inggris'),
            TextColumn::make('informatika')
            ->label('Informatika'),
            TextColumn::make('fisika')
            ->label('Fisika'),
            TextColumn::make('kimia')
            ->label('Kimia'),
            TextColumn::make('bisnis')
            ->label('Proses Bisnis & K3LH'),
            TextColumn::make('profesi')
            ->label('Profesi Dan Kewirausahaan'),
            TextColumn::make('pemtur')
            ->label('Pemrograman Terstruktur'),
            TextColumn::make('pbo')
            ->label('Pemrograman Berorientasi Objek'),
            TextColumn::make('gim')
            ->label('Orientasi Dasar Pengembangan Perangkat Lunak Dan GIM'),
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
            'index' => Pages\ListUsmt6s::route('/'),
            'create' => Pages\CreateUsmt6::route('/create'),
            'edit' => Pages\EditUsmt6::route('/{record}/edit'),
        ];
    }
}
