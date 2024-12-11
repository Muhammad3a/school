<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Usmt6;
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
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\Usmt6Resource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\Usmt6Resource\RelationManagers;

class Usmt6Resource extends Resource
{
    protected static ?string $model = Usmt6::class;

    public static function getNavigationItems(): array
    {
        if (!auth()->check() || !auth()->user()->hasRole('wali kelas')) {
            return [];
        }

        return [
            NavigationItem::make()
                ->label('Nilai Umum Semester 6')
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

                        TextInput::make('mtk')
                            ->label('Matematika')
                            ->rules('max:100'),
                        TextInput::make('inggris')
                            ->label('Bahasa Inggris')
                            ->rules('max:100'),
                        TextInput::make('informatika')
                            ->label('Informatika')
                            ->rules('max:100'),
                        TextInput::make('fisika')
                            ->label('Fisika')
                            ->rules('max:100'),
                        TextInput::make('kimia')
                            ->label('Kimia')
                            ->rules('max:100'),
                        TextInput::make('bisnis')
                            ->label('Proses Bisnis & K3LH')
                            ->rules('max:100'),
                        TextInput::make('profesi')
                            ->label('Profesi Dan Kewirausahaan')
                            ->rules('max:100'),
                        TextInput::make('pemtur')
                            ->label('Pemrograman Terstruktur')
                            ->rules('max:100'),
                        TextInput::make('pbo')
                            ->label('Pemrograman Berorientasi Objek')
                            ->rules('max:100'),
                        TextInput::make('gim')
                            ->label('Orientasi Dasar Pengembangan Perangkat Lunak Dan GIM')
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
                TextColumn::make('mtk')
                    ->label('Matematika')
                    ->numeric(),
                TextColumn::make('inggris')
                    ->label('Bahasa Inggris')
                    ->numeric(),
                TextColumn::make('informatika')
                    ->label('Informatika')
                    ->numeric(),
                TextColumn::make('fisika')
                    ->label('Fisika')
                    ->numeric(),
                TextColumn::make('kimia')
                    ->label('Kimia')
                    ->numeric(),
                TextColumn::make('bisnis')
                    ->label('Proses Bisnis & K3LH')
                    ->numeric(),
                TextColumn::make('profesi')
                    ->label('Profesi Dan Kewirausahaan')
                    ->numeric(),
                TextColumn::make('pemtur')
                    ->label('Pemrograman Terstruktur')
                    ->numeric(),
                TextColumn::make('pbo')
                    ->label('Pemrograman Berorientasi Objek')
                    ->numeric(),
                TextColumn::make('gim')
                    ->label('Orientasi Dasar Pengembangan Perangkat Lunak Dan GIM')
                    ->numeric(),
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
            'index' => Pages\ListUsmt6s::route('/'),
            'create' => Pages\CreateUsmt6::route('/create'),
            'edit' => Pages\EditUsmt6::route('/{record}/edit'),
        ];
    }

    public  static function getLabel(): ?string
    {
        $locale = app()->getLocale();

        if ($locale == 'id') {
            return "Nilai Ledger B Kejuruan Umum & DK Semester 67";
        } else
            return "Teacher";
    }
}
