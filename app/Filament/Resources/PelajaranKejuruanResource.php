<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use App\Models\PelajaranKejuruan;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\PelajaranKejuruanResource\Pages;
use App\Filament\Resources\PelajaranKejuruanResource\RelationManagers;

class PelajaranKejuruanResource extends Resource
{
    protected static ?string $model = PelajaranKejuruan::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function shouldRegisterNavigation(): bool
    {
        return auth()->user()->hasRole('admin');
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('kode'),
                TextInput::make('name')
                    ->label('Pelajaran'),
                TextInput::make('bidang'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('kode'),
                TextColumn::make('name')
                    ->label('Nama Pelajaran'),
                TextColumn::make('bidang'),
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
            'index' => Pages\ListPelajaranKejuruans::route('/'),
            'create' => Pages\CreatePelajaranKejuruan::route('/create'),
            'edit' => Pages\EditPelajaranKejuruan::route('/{record}/edit'),
        ];
    }
}
