<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Dsmt1;
use App\Models\kelas;
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
use App\Filament\Resources\Dsmt1Resource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\Dsmt1Resource\RelationManagers;

class Dsmt1Resource extends Resource
{
    protected static ?string $model = Dsmt1::class;

    public static function getNavigationItems(): array
    {
        if (!auth()->check() || !auth()->user()->hasRole('wali kelas')) {
            return [];
        }

        return [
            NavigationItem::make()
                ->label('Nilai Disiplin Semester 1')
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
                            ->label('Murid')
                            ->required()
                            ->searchable(),
                        Select::make('classroom_id')
                            ->options(kelas::all()->pluck('name_kelas', 'id')->filter())
                            ->searchable()
                            ->required()
                            ->label('Kelas'),
                        Select::make('priode_id')
                            ->label('Periode')
                            ->searchable()
                            ->required()
                            ->options(Priode::all()->pluck('name', 'id')),
                        TextInput::make('dwaktu')
                            ->label('Disiplin Waktu')
                            ->numeric()
                            ->rules('max:100'),
                        TextInput::make('dibadah')
                            ->label('Disiplin Ibadah')
                            ->numeric()
                            ->rules('max:100'),
                        TextInput::make('dbelajar')
                            ->label('Disiplin Belajar')
                            ->numeric()
                            ->rules('max:100'),
                        TextInput::make('dbergaul')
                            ->label('Disiplin Bergaul')
                            ->numeric()
                            ->rules('max:100'),
                        TextInput::make('dberbusana')
                            ->label('Disiplin Berbusana')
                            ->numeric()
                            ->rules('max:100'),
                        TextInput::make('dmenggunakanfasilitas')
                            ->label('Disiplin Menggunakan Fasilitas')
                            ->numeric()
                            ->rules('max:100'),
                        TextInput::make('dk3')
                            ->label('Disiplin k3')
                            ->numeric()
                            ->rules('max:100'),
                        TextInput::make('dberbahasa')
                            ->label('Disiplin Berbahasa')
                            ->numeric()
                            ->rules('max:100'),
                        TextInput::make('dbertindak')
                            ->label('Bertindak & Menindak')
                            ->numeric()
                            ->rules('max:100'),
                        TextInput::make('dkeamanan')
                            ->label('Disiplin Keamanan')
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
                    ->label('Murid')
                    ->searchable(),
                TextColumn::make('kelas.name_kelas')
                    ->label('Kelas'),
                TextColumn::make('priode.name')->label('Periode'),
                TextColumn::make('dwaktu')
                    ->label('Disiplin Waktu'),
                TextColumn::make('dibadah')
                    ->label('Disiplin Ibadah'),
                TextColumn::make('dbelajar')
                    ->label('Disiplin Belajar'),
                TextColumn::make('dbergaul')
                    ->label('Disiplin Bergaul'),
                TextColumn::make('dberbusana')
                    ->label('Disiplin Berbusana'),
                TextColumn::make('dmenggunakanfasilitas')
                    ->label('Disiplin Menggunakan Fasilitas'),
                TextColumn::make('dk3')
                    ->label('dk3'),
                TextColumn::make('dberbahasa')
                    ->label('Disiplin Berbahasa'),
                TextColumn::make('dbertindak')
                    ->label('Bertindak & Menindak'),
                TextColumn::make('dkeamanan')
                    ->label('Disiplin Keamanan'),

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
            'index' => Pages\ListDsmt1s::route('/'),
            'create' => Pages\CreateDsmt1::route('/create'),
            'edit' => Pages\EditDsmt1::route('/{record}/edit'),
        ];
    }

    public  static function getLabel(): ?string
    {
        $locale = app()->getLocale();

        if ($locale == 'id') {
            return "Nilai 10 Disiplin Semester 1";
        } else
            return "Teacher";
    }
}
