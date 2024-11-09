<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Student;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\Pmembacaalquran;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\PmembacaalquranResource\Pages;
use App\Filament\Resources\PmembacaalquranResource\RelationManagers;

class PmembacaalquranResource extends Resource
{
    protected static ?string $model = Pmembacaalquran::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationLabel = 'Pembiasaan Membaca Al-Quran';

    public static function shouldRegisterNavigation(): bool
    {
        return auth()->user()->hasRole('wali kelas');
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
                        TextInput::make('1')
                            ->label('Semseter 1'),
                        TextInput::make('2')
                            ->label('Semseter 2'),
                        TextInput::make('3')
                            ->label('Semseter 3'),
                        TextInput::make('4')
                            ->label('Semseter 4'),
                        TextInput::make('5')
                            ->label('Semseter 5'),
                        TextInput::make('6')
                            ->label('Semseter 6'),
                    ])->columns(7)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('student.name')
                    ->label('Murid'),
                TextColumn::make('1')
                    ->label('Semseter 1'),
                TextColumn::make('2')
                    ->label('Semester 2'),
                TextColumn::make('3')
                    ->label('Semester 3'),
                TextColumn::make('4')
                    ->label('Semester 4'),
                TextColumn::make('5')
                    ->label('Semester 5'),
                TextColumn::make('6')
                    ->label('Semester 6'),
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
            'index' => Pages\ListPmembacaalqurans::route('/'),
            'create' => Pages\CreatePmembacaalquran::route('/create'),
            'edit' => Pages\EditPmembacaalquran::route('/{record}/edit'),
        ];
    }
    public  static function getLabel(): ?string
    {
        $locale = app()->getLocale();

        if ($locale == 'id') {
            return "Nilai pembiasaan Membaca Al-Quran";
        } else
            return "Teacher";
    }
}
