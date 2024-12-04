<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Psmt6;
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
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\Psmt6Resource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\Psmt6Resource\RelationManagers;

class Psmt6Resource extends Resource
{
    protected static ?string $model = Psmt6::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationLabel = 'Nilai Pembiasaan Semester 6';


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
                        TextInput::make('bpot')
                            ->label('Berbakti pada Orang Tua')
                            ->numeric()
                            ->rules('max:100'),
                        TextInput::make('bmuslim')
                            ->label('Berbusana Muslim')
                            ->numeric()
                            ->rules('max:100'),
                        TextInput::make('mabsaai')
                            ->label('Memelihara Adab Belajar sesuai Ajaran Agama Islam')
                            ->numeric()
                            ->rules('max:100'),
                        TextInput::make('mma')
                            ->label('Membaca dan Menghafal Al-Quran')
                            ->numeric()
                            ->rules('max:100'),
                        TextInput::make('mkdl')
                            ->label('Memelihara Kebersihan Diri dan Lingkungan')
                            ->numeric()
                            ->rules('max:100'),
                        TextInput::make('msfss')
                            ->label('Mendirikan Sholat Fardhu dan Sholat Sunat')
                            ->numeric()
                            ->rules('max:100'),
                        TextInput::make('mtck')
                            ->label('Melaksanakan Talim dan Ceramah Keagamaan')
                            ->numeric()
                            ->rules('max:100'),
                        TextInput::make('tmisd')
                            ->label('Terbiasa Melaksanakan Infaq Sejak Dini')
                            ->numeric()
                            ->rules('max:100'),
                        TextInput::make('mswss')
                            ->label('Melaksanakan Saum Wajib dan Saum Sunah')
                            ->numeric()
                            ->rules('max:100'),
                        TextInput::make('cta')
                            ->label('Cinta Tanah Air')
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
                TextColumn::make('bpot')
                    ->label('Berbakti pada Orang Tua'),
                TextColumn::make('bmuslim')
                    ->label('Berbusana Muslim'),
                TextColumn::make('mabsaai')
                    ->label('Memelihara Adab Belajar sesuai Ajaran Agama Islam'),
                TextColumn::make('mma')
                    ->label('Membaca dan Menghafal Al-Quran'),
                TextColumn::make('mkdl')
                    ->label('Memelihara Kebersihan Diri dan Lingkungan'),
                TextColumn::make('msfss')
                    ->label('Mendirikan Sholat Fardhu dan Sholat Sunat'),
                TextColumn::make('mtck')
                    ->label('Melaksanakan Talim dan Ceramah Keagamaan'),
                TextColumn::make('tmisd')
                    ->label('Terbiasa Melaksanakan Infaq Sejak Dini'),
                TextColumn::make('mswss')
                    ->label('Melaksanakan Saum Wajib dan Saum Sunah'),
                TextColumn::make('cta')
                    ->label('Cinta Tanah Air'),
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
            'index' => Pages\ListPsmt6s::route('/'),
            'create' => Pages\CreatePsmt6::route('/create'),
            'edit' => Pages\EditPsmt6::route('/{record}/edit'),
        ];
    }

    public  static function getLabel(): ?string
    {
        $locale = app()->getLocale();

        if ($locale == 'id') {
            return "Nilai 10 Pembiasaan Semester 6";
        } else
            return "Teacher";
    }
}
