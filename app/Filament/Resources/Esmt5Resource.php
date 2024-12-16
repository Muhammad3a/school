<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Esmt5;
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
use App\Filament\Resources\Esmt5Resource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\Esmt5Resource\RelationManagers;

class Esmt5Resource extends Resource
{
    protected static ?string $model = Esmt5::class;

    public static function getNavigationItems(): array
    {
        if (!auth()->check() || !auth()->user()->hasRole('wali kelas')) {
            return [];
        }

        return [
            NavigationItem::make()
                ->label('Nilai Eskul Semester 5')
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
                            ->searchable()
                            ->required()
                            ->label('Murid'),
                        Select::make('classroom_id')
                            ->options(Classroom::all()->pluck('name', 'id'))
                            ->searchable()
                            ->required()
                            ->label('Kelas'),
                        Select::make('priode_id')
                            ->label('Periode')
                            ->searchable()
                            ->required()
                            ->options(Priode::all()->pluck('name', 'id')),
                        TextInput::make('pramuka')
                            ->label('Pramuka')
                            ->numeric()
                            ->rules('max:100'),
                        TextInput::make('kesenian')
                            ->label('Kesenian')
                            ->numeric()
                            ->rules('max:100'),
                        TextInput::make('pramadan')
                            ->label('Pesantren Ramadhan')
                            ->numeric()
                            ->rules('max:100'),
                        TextInput::make('okesehatan')
                            ->label('Olahraga & Kesehatan')
                            ->numeric()
                            ->rules('max:100'),
                        TextInput::make('kmulia')
                            ->label('Keagamaan & Akhlak Mulia')
                            ->numeric()
                            ->rules('max:100'),
                        TextInput::make('bkerja')
                            ->label('Budaya Kerja')
                            ->numeric()
                            ->rules('max:100'),
                        TextInput::make('kewirausahaan')
                            ->label('Kewirausaan')
                            ->numeric()
                            ->rules('max:100'),
                        TextInput::make('berekayasa')
                            ->label('Berekayasa & Berteknologi')
                            ->numeric()
                            ->rules('max:100'),
                        TextInput::make('kebekerjaan')
                            ->label('Keberkerjaan')
                            ->numeric()
                            ->rules('max:100'),
                        TextInput::make('foto')
                            ->numeric()
                            ->rules('max:100')
                            ->label('Foto'),
                        TextInput::make('video')
                            ->numeric()
                            ->rules('max:100')
                            ->label('Video'),
                        TextInput::make('desain')
                            ->numeric()
                            ->rules('max:100')
                            ->label('Desain'),
                        TextInput::make('kaligerafi')
                            ->numeric()
                            ->rules('max:100')
                            ->label('Kaligerafi'),
                        TextInput::make('engclub')
                            ->numeric()
                            ->rules('max:100')
                            ->label('English Club'),
                        TextInput::make('hadroh')
                            ->numeric()
                            ->rules('max:100')
                            ->label('Hadroh'),
                        TextInput::make('voli')
                            ->numeric()
                            ->rules('max:100')
                            ->label('Voli'),
                        TextInput::make('futsal')
                            ->numeric()
                            ->rules('max:100')
                            ->label('Futsal'),
                        TextInput::make('silat')
                            ->numeric()
                            ->rules('max:100')
                            ->label('Silat'),
                        TextInput::make('sakit')
                            ->label('Sakit')
                            ->numeric()
                            ->rules('max:100'),
                        TextInput::make('izin')
                            ->label('Izin')
                            ->numeric()
                            ->rules('max:100'),
                        TextInput::make('Alfa')
                            ->label('Alfa')
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
                TextColumn::make('pramuka')
                    ->label('Pramuka'),
                TextColumn::make('kesenian')
                    ->label('Kesenian'),
                TextColumn::make('pramadan')
                    ->label('Pesantren Ramadhan'),
                TextColumn::make('okesehatan')
                    ->label('Olahraga & Kesehatan'),
                TextColumn::make('kmulia')
                    ->label('Keagamaan & Akhlak Mulia'),
                TextColumn::make('bkerja')
                    ->label('Budaya Kerja'),
                TextColumn::make('kewirausahaan')
                    ->label('Kewirausaan'),
                TextColumn::make('berekayasa')
                    ->label('Berekayasa & Berteknologi'),
                TextColumn::make('kebekerjaan')
                    ->label('Keberkerjaan'),
                TextColumn::make('foto')
                    ->label('Photografer'),
                TextColumn::make('video')
                    ->label('Video editing'),
                TextColumn::make('desain')
                    ->label('Desain'),
                TextColumn::make('kaligerafi')
                    ->label('Kaligrafi'),
                TextColumn::make('engclub')
                    ->label('English Club'),
                TextColumn::make('hadroh')
                    ->label('Hadroh'),
                TextColumn::make('voli')
                    ->label('Vollyball'),
                TextColumn::make('futsal')
                    ->label('Futsal'),
                TextColumn::make('silat')
                    ->label('Silat'),
                TextColumn::make('sakit')
                    ->label('Sakit'),
                TextColumn::make('izin')
                    ->label('Izin'),
                TextColumn::make('alfa')
                    ->label('Alfa'),
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
            'index' => Pages\ListEsmt5s::route('/'),
            'create' => Pages\CreateEsmt5::route('/create'),
            'edit' => Pages\EditEsmt5::route('/{record}/edit'),
        ];
    }

    public  static function getLabel(): ?string
    {
        $locale = app()->getLocale();

        if ($locale == 'id') {
            return "Nilai Ledger D Eskul,p5k,Presensi Semester 5";
        } else
            return "Teacher";
    }
}
