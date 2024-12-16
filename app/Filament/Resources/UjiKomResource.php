<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\jengke;
use App\Models\UjiKom;
use App\Models\Student;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Navigation\NavigationItem;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\UjiKomResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\UjiKomResource\RelationManagers;

class UjiKomResource extends Resource
{
    protected static ?string $model = UjiKom::class;

    public static function getNavigationItems(): array
    {
        if (!auth()->check() || !auth()->user()->hasRole('wali kelas')) {
            return [];
        }

        return [
            NavigationItem::make()
                ->label('Ujian Kompetensi Keahlian')
                ->icon('heroicon-o-rectangle-stack')
                ->url(static::getUrl()),
        ];
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('student_id')
                    ->searchable()
                    ->required()
                    ->label('murid')
                    ->options(Student::all()->pluck('name', 'id')),
                TextInput::make('nilai')
                    ->label('Nilai')
                    ->required()
                    ->numeric()
                    ->rules('max:100'),
                Select::make('jengke_id')
                    ->searchable()
                    ->required()
                    ->options(jengke::all()->pluck('name', 'id'))
                    ->label('Jenis Kegiatan'),
                TextInput::make('waktu')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('student.name')
                    ->label('Murid'),

                TextColumn::make('nilai'),

                TextColumn::make('jengke.name')
                    ->label('Jenis Kegiatan')
                    ->wrap(),

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
            'index' => Pages\ListUjiKoms::route('/'),
            'create' => Pages\CreateUjiKom::route('/create'),
            'edit' => Pages\EditUjiKom::route('/{record}/edit'),
        ];
    }

    public  static function getLabel(): ?string
    {
        return "Uji Kompetensi";
    }
}
