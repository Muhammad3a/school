<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Psmt6;
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

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
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
            'index' => Pages\ListPsmt6s::route('/'),
            'create' => Pages\CreatePsmt6::route('/create'),
            'edit' => Pages\EditPsmt6::route('/{record}/edit'),
        ];
    }
}
