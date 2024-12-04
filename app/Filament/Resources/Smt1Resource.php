<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\Smt1;
use Filament\Tables;
use App\Models\Priode;
use App\Models\Student;
use Filament\Forms\Form;
use App\Models\Classroom;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use App\Filament\Resources\Smt1Resource\Pages;

class Smt1Resource extends Resource
{
    protected static ?string $model = Smt1::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationLabel = 'Nilai Mulok Semester 1';

    public static function shouldRegisterNavigation(): bool
    {
        return auth()->check() && auth()->user()->hasRole('wali kelas');
    }

    public static function form(Form $form): Form
    {
        return $form->schema([
            Card::make()
                ->schema([
                    Select::make('student_id')
                        ->label('Murid')
                        ->options(fn() => Student::pluck('name', 'id'))
                        ->required()
                        ->searchable(),
                    Select::make('classroom_id')
                        ->label('Kelas')
                        ->options(fn() => Classroom::pluck('name', 'id'))
                        ->required()
                        ->searchable(),
                    Select::make('priode_id')
                        ->label('Periode')
                        ->searchable()
                        ->options(Priode::all()->pluck('name', 'id')),
                    TextInput::make('pai')
                        ->label('Pendidikan Agama Islam')
                        ->required()
                        ->numeric()
                        ->rules('max:100'),
                    TextInput::make('pp')->label('Pendidikan Pancasila')->required()->numeric()
                        ->rules('max:100'),
                    TextInput::make('indo')->label('Bahasa Indonesia')->required()->numeric()
                        ->rules('max:100'),
                    TextInput::make('pjok')->label('Pendidikan Jasmani Olahraga & Kesehatan')->required()->numeric()
                        ->rules('max:100'),
                    TextInput::make('sejarah')->label('Sejarah')->required()->numeric()
                        ->rules('max:100'),
                    TextInput::make('sb')->label('Seni Budaya')->required()->numeric()
                        ->rules('max:100'),
                    TextInput::make('sunda')->label('Bahasa Sunda')->required()->numeric()
                        ->rules('max:100'),
                    TextInput::make('arab')->label('Bahasa Arab')->required()->numeric()
                        ->rules('max:100'),
                ])
                ->columns(2),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('student.name')->label('Murid'),
                TextColumn::make('classroom.name')->label('Kelas'),
                TextColumn::make('priode.name')->label('Periode'),
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
                // Filter Kelas
                Tables\Filters\SelectFilter::make('classroom_id')
                    ->label('Filter Kelas')
                    ->options(fn() => Classroom::pluck('name', 'id')->toArray())
                    ->placeholder('Semua Kelas'),

                // Filter Periode
                Tables\Filters\SelectFilter::make('priode_id')
                    ->label('Filter Periode')
                    ->options(fn() => Priode::pluck('name', 'id')->toArray())
                    ->placeholder('Semua Periode'),
            ])
            ->actions([Tables\Actions\EditAction::make()])
            ->bulkActions([Tables\Actions\DeleteBulkAction::make()]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSmt1s::route('/'),
            'create' => Pages\CreateSmt1::route('/create'),
            'edit' => Pages\EditSmt1::route('/{record}/edit'),
        ];
    }

    public static function getLabel(): ?string
    {
        return __("Nilai Ledger Mapel Umum & Mulok Semester 1");
    }
}
