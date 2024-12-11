<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\Smt5;
use Filament\Tables;
use App\Models\Priode;
use App\Models\Student;
use Filament\Forms\Form;
use App\Models\Classroom;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Select;
use Filament\Navigation\NavigationItem;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\Smt5Resource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\Smt5Resource\RelationManagers;

class Smt5Resource extends Resource
{
    protected static ?string $model = Smt5::class;

    public static function getNavigationItems(): array
    {
        if (!auth()->check() || !auth()->user()->hasRole('wali kelas')) {
            return [];
        }

        return [
            NavigationItem::make()
                ->label('Nilai Mulok Semester 5')
                ->icon('heroicon-o-rectangle-stack')
                ->url(static::getUrl()),
        ];
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
                        Select::make('priode_id')
                            ->label('Periode')
                            ->searchable()
                            ->options(Priode::all()->pluck('name', 'id')),

                        TextInput::make('pai')
                            ->label('Pendidikan Agama Islam')
                            ->numeric()
                            ->rules('max:100'),
                        TextInput::make('pp')
                            ->label('Pendidikan Pancasila')
                            ->numeric()
                            ->rules('max:100'),
                        TextInput::make('indo')
                            ->label('Bahasa Indonesia')
                            ->numeric()
                            ->rules('max:100'),
                        TextInput::make('pjok')
                            ->label('Pendidikan Jasmani Olahraga dan Kesehatan')
                            ->numeric()
                            ->rules('max:100'),
                        TextInput::make('sejarah')
                            ->label('Sejarah')
                            ->numeric()
                            ->rules('max:100'),
                        TextInput::make('sb')
                            ->label('Seni Budaya')
                            ->numeric()
                            ->rules('max:100'),
                        TextInput::make('sunda')
                            ->label('Bahasa Sunda')
                            ->numeric()
                            ->rules('max:100'),
                        TextInput::make('arab')
                            ->label('Bahasa Arab')
                            ->numeric()
                            ->rules('max:100'),
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
                TextColumn::make('priode.name')->label('Periode'),
                TextColumn::make('pai')
                    ->label('Pendidikan Agama Islam'),
                TextColumn::make('pp')
                    ->label('Pendidikan Pancasila'),
                TextColumn::make('indo')
                    ->label('Bahasa Indonesia '),
                TextColumn::make('pjok')
                    ->label('Pendidikan Jasmani OLahraga & Kesehatan'),
                TextColumn::make('sejarah')
                    ->label('Sejarah'),
                TextColumn::make('sb')
                    ->label('Seni Budaya'),
                TextColumn::make('sunda')
                    ->label('Bahasa Sunda'),
                TextColumn::make('arab')
                    ->label('Bahasa Arab'),
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
            'index' => Pages\ListSmt5s::route('/'),
            'create' => Pages\CreateSmt5::route('/create'),
            'edit' => Pages\EditSmt5::route('/{record}/edit'),
        ];
    }

    public  static function getLabel(): ?string
    {
        $locale = app()->getLocale();

        if ($locale == 'id') {
            return "Nilai Ledger Mapel Umum & Mulok Semester 5";
        } else
            return "Teacher";
    }
}
