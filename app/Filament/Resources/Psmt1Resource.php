<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Psmt1;
use App\Models\Student;
use Filament\Forms\Form;
use App\Models\Classroom;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\Psmt1Resource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\Psmt1Resource\RelationManagers;

class Psmt1Resource extends Resource
{
    protected static ?string $model = Psmt1::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationLabel = 'Nilai Pembiasaan Semester 1';


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
                        TextInput::make('bpot')
                            ->label('Berbakti pada Orang Tua'),
                        TextInput::make('bmuslim')
                            ->label('Berbusana Muslim'),
                        TextInput::make('mabsaai')
                            ->label('Memelihara Adab Belajar sesuai Ajaran Agama Islam'),
                        TextInput::make('mma')
                            ->label('Membaca dan Menghafal Al-Quran'),
                        TextInput::make('mkdl')
                            ->label('Memelihara Kebersihan Diri dan Lingkungan'),
                        TextInput::make('msfss')
                            ->label('Mendirikan Sholat Fardhu dan Sholat Sunat'),
                        TextInput::make('mtck')
                            ->label('Melaksanakan Talim dan Ceramah Keagamaan'),
                        TextInput::make('tmisd')
                            ->label('Terbiasa Melaksanakan Infaq Sejak Dini'),
                        TextInput::make('mswss')
                            ->label('Melaksanakan Saum Wajib dan Saum Sunah'),
                        TextInput::make('cta')
                            ->label('Cinta Tanah Air'),
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
            'index' => Pages\ListPsmt1s::route('/'),
            'create' => Pages\CreatePsmt1::route('/create'),
            'edit' => Pages\EditPsmt1::route('/{record}/edit'),
        ];
    }

    public  static function getLabel(): ?string
    {
        $locale = app()->getLocale();

        if ($locale == 'id') {
            return "Nilai 10 Pembiasaan Semester 1";
        } else
            return "Teacher";
    }
}
