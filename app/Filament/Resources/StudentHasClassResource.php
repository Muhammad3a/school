<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Priode;
use App\Models\Student;
use App\Models\HomeRoom;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\StudentHasClass;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\StudentHasClassResource\Pages;
use App\Filament\Resources\StudentHasClassResource\RelationManagers;

class StudentHasClassResource extends Resource
{
    protected static ?string $model = StudentHasClass::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationLabel = 'Student Has Class';

    protected static ?string $navigationGroup = 'Akademik';

    // protected static bool $shouldRegisterNavigation = false;

    protected static ?int $navigationSort = 23;

    public static function shouldRegisterNavigation(): bool
    {
        return auth()->user()->hasRole('admin');
    }


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                    ->schema([
                        Select::make('students_id')
                            ->searchable()
                            ->options(Student::all()->pluck('name', 'id'))
                            ->label('Student'),
                        Select::make('homerooms_id')
                            ->searchable()
                            ->options(HomeRoom::all()->pluck('classroom.name', 'id'))
                            ->label('Class'),
                        Select::make('priode_id')
                            ->label('Periode')
                            ->searchable()
                            ->options(Priode::all()->pluck('name', 'id'))
                    ])->columns(3)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('students.name'),
                TextColumn::make('homeroom.classroom.name'),
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
            'index' => Pages\ListStudentHasClasses::route('/'),
            'create' => Pages\FormStudentClass::route('/create'),
            'edit' => Pages\EditStudentHasClass::route('/{record}/edit'),
        ];
    }
}
