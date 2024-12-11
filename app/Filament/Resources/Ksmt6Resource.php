<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Ksmt6;
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
use App\Filament\Resources\Ksmt6Resource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\Ksmt6Resource\RelationManagers;

class Ksmt6Resource extends Resource
{
    protected static ?string $model = Ksmt6::class;

    public static function getNavigationItems(): array
    {
        if (!auth()->check() || !auth()->user()->hasRole('wali kelas')) {
            return [];
        }

        return [
            NavigationItem::make()
                ->label('Nilai Kejuruan Semester 6')
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
                        TextInput::make('bd')
                            ->label('Basis Data')
                            ->numeric()
                            ->rules('max:100'),
                        TextInput::make('persisda')
                            ->label('Pemrograman Berbasis Teks, Grafis Dan Multimedia')
                            ->numeric()
                            ->rules('max:100'),
                        TextInput::make('pw')
                            ->label('Pemrograman Web')
                            ->numeric()
                            ->rules('max:100'),
                        TextInput::make('ppb')
                            ->label('Pemrograman Perangkat Bergerak')
                            ->numeric()
                            ->rules('max:100'),
                        TextInput::make('pkk')
                            ->label('Produk Kreatif & Kewirausahaan')
                            ->numeric()
                            ->rules('max:100'),
                        TextInput::make('kb')
                            ->label('Kecerdasaan Buatan')
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
            'index' => Pages\ListKsmt6s::route('/'),
            'create' => Pages\CreateKsmt6::route('/create'),
            'edit' => Pages\EditKsmt6::route('/{record}/edit'),
        ];
    }

    public  static function getLabel(): ?string
    {
        $locale = app()->getLocale();

        if ($locale == 'id') {
            return "Nilai Ledger B Kejuruan & KK Semester 6";
        } else
            return "Teacher";
    }
}
