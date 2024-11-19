<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Smt1;
use App\Models\Student;
use App\Models\Classroom;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\Smt1Resource\Pages;

class Smt1Resource extends Resource
{
    protected static ?string $model = Smt1::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationLabel = 'Nilai Mulok Semester 1';

    public static function shouldRegisterNavigation(): bool
    {
        // Navigasi hanya untuk pengguna dengan peran wali kelas
        return auth()->check() && auth()->user()->hasRole('wali kelas');
    }

    public static function form(Form $form): Form
    {
        return $form->schema([
            Card::make()
                ->schema([
                    Select::make('student_id')
                        ->label('Murid')
                        ->options(fn () => Student::pluck('name', 'id'))
                        ->required()
                        ->searchable(),
                    Select::make('classroom_id')
                        ->label('Kelas')
                        ->options(fn () => Classroom::pluck('name', 'id'))
                        ->required()
                        ->searchable(),
                    TextInput::make('pai')
                        ->label('Pendidikan Agama Islam')
                        ->required(),
                    TextInput::make('pp')
                        ->label('Pendidikan Pancasila')
                        ->required(),
                    TextInput::make('indo')
                        ->label('Bahasa Indonesia')
                        ->required(),
                    TextInput::make('pjok')
                        ->label('Pendidikan Jasmani Olahraga dan Kesehatan')
                        ->required(),
                    TextInput::make('sejarah')
                        ->label('Sejarah')
                        ->required(),
                    TextInput::make('sb')
                        ->label('Seni Budaya')
                        ->required(),
                    TextInput::make('sunda')
                        ->label('Bahasa Sunda')
                        ->required(),
                    TextInput::make('arab')
                        ->label('Bahasa Arab')
                        ->required(),
                ])
                ->columns(2),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('student.name')
                    ->label('Murid')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('classroom.name')
                    ->label('Kelas')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('pai')->label('Pendidikan Agama Islam'),
                TextColumn::make('pp')->label('Pendidikan Pancasila'),
                TextColumn::make('indo')->label('Bahasa Indonesia'),
                TextColumn::make('pjok')->label('Pendidikan Jasmani Olahraga & Kesehatan'),
                TextColumn::make('sejarah')->label('Sejarah'),
                TextColumn::make('sb')->label('Seni Budaya'),
                TextColumn::make('sunda')->label('Bahasa Sunda'),
                TextColumn::make('arab')->label('Bahasa Arab'),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('classroom_id')
                    ->label('Filter Kelas')
                    ->options(fn () => Classroom::pluck('name', 'id')),
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
        return [];
    }

    public  static function getLabel(): ?string
    {
        $locale = app()->getLocale();

        if ($locale == 'id') {
            return "Nilai Ledger Mapel Umum & Mulok Semester 1";
        } else
            return "Teacher";
    }
}