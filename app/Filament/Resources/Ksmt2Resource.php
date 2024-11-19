<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Ksmt2;
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
use App\Filament\Resources\Ksmt2Resource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\Ksmt2Resource\RelationManagers;

class Ksmt2Resource extends Resource
{
    protected static ?string $model = Ksmt2::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationLabel = 'Nilai Kejuruan Semester 2';


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
                    TextInput::make('bd')
                    ->label('Basis Data'),
                    TextInput::make('persisda')
                    ->label('Pemrograman Berbasis Teks, Grafis Dan Multimedia'),
                    TextInput::make('pw')
                    ->label('Pemrograman Web'),
                    TextInput::make('ppb')
                    ->label('Pemrograman Perangkat Bergerak'),
                    TextInput::make('pkk')
                    ->label('Produk Kreatif & Kewirausahaan'),
                    TextInput::make('kb')
                    ->label('Kecerdasaan Buatan'),
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
            TextColumn::make('bd')
            ->label('Basis Data'),
            TextColumn::make('persisda')
            ->label('Pemrograman Berbasis Teks, Grafis Dan Multimedia'),
            TextColumn::make('pw')
            ->label('Pemrograman Web'),
            TextColumn::make('ppb')
            ->label('Pemrograman Perangkat Bergerak'),
            TextColumn::make('pkk')
            ->label('Produk Kreatif & Kewirausahaan'),
            TextColumn::make('kb')
            ->label('Kecerdasaan Buatan'),
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
            return "Nilai Ledger B Kejuruan & KK Semester 1";
        } else
            return "Teacher";
    }
}