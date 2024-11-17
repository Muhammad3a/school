<?php

namespace App\Filament\Resources;

use App\Models\Pai;
use Filament\Forms;
use Filament\Tables;
use App\Models\Student;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\PaiResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\PaiResource\RelationManagers;

class PaiResource extends Resource
{
    protected static ?string $model = Pai::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationLabel = 'Semester 1';

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
                            ->label("PAI"),
                        TextInput::make('2')
                            ->label("PP"),
                        TextInput::make('3')
                            ->label("B Indo"),
                        TextInput::make('4')
                            ->label("PJOK"),
                        TextInput::make('5')
                            ->label("Sejarah"),
                        TextInput::make('6')
                            ->label("Seni Budaya"),
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
                    ->label('PAI'),
                TextColumn::make('2')
                    ->label("PP"),
                TextColumn::make('3')
                    ->label("B Indo"),
                TextColumn::make('4')
                    ->label("PJOK"),
                TextColumn::make('5')
                    ->label("Sejarah"),
                TextColumn::make('6')
                    ->label("Seni Budaya"),
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
            'index' => Pages\ListPais::route('/'),
            'create' => Pages\CreatePai::route('/create'),
            'edit' => Pages\EditPai::route('/{record}/edit'),
        ];
    }
    public  static function getLabel(): ?string
    {
        $locale = app()->getLocale();

        if ($locale == 'id') {
            return " Semester 1";
        } else
            return "Teacher";
    }
}
