<?php

namespace App\Filament\Resources;

use App\Models\Pkl;
use Filament\Forms;
use Filament\Tables;
use App\Models\jengke;
use App\Models\Student;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\PklResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\PklResource\RelationManagers;

class PklResource extends Resource
{
    protected static ?string $model = Pkl::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationLabel = 'Praktik Kerja Lapangan';

    public static function shouldRegisterNavigation(): bool
    {
        return auth()->user()->hasRole('wali kelas');
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('student')
                    ->label('murid')
                    ->options(Student::all()->pluck('name', 'id')),
                TextInput::make('mitra')
                    ->label('Mitra Dudika'),
                TextInput::make('nilai')
                    ->label('Nilai'),
                Textarea::make('lokasi'),
                Select::make('jengke_id')
                    ->options(jengke::all()->pluck('name', 'id'))
                    ->label('Jenis Kegiatan'),
                TextInput::make('lama'),
                TextInput::make('waktu'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('student.name')
                    ->label('Murid'),
                TextColumn::make('mitra')
                    ->label('Mitra DUDIKA'),
                TextColumn::make('nilai'),
                TextColumn::make('lokasi')
                    ->wrap(),
                TextColumn::make('jengke.name')
                    ->wrap(),
                TextColumn::make('lama'),
                TextColumn::make('waktu'),
            ])
            ->filters([
                //
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
            'index' => Pages\ListPkls::route('/'),
            'create' => Pages\CreatePkl::route('/create'),
            'edit' => Pages\EditPkl::route('/{record}/edit'),
        ];
    }
}
