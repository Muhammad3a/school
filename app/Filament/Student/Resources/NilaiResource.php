<?php

namespace App\Filament\Student\Resources;

use Filament\Forms;
use App\Models\User;
use Filament\Tables;
use App\Models\Nilai;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Illuminate\Support\Facades\Auth;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Student\Resources\NilaiResource\Pages;
use App\Filament\Student\Resources\NilaiResource\RelationManagers;
use App\Models\Classroom;
use Filament\Forms\Components\Select;
use Filament\Tables\Filters\SelectFilter;

class NilaiResource extends Resource
{
    protected static ?string $model = Nilai::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('subject.name'),
                // TextColumn::make('pai.1')
                //     ->label('Nilai PAI Semester 1'),
                TextColumn::make('nilai'),
            ])
            ->filters([
                SelectFilter::make('class_id')
                    ->options(
                        Classroom::whereHas('students', function ($query) {
                            $query->where('user_id', Auth::id());
                        })->pluck('name', 'id')
                    )
            ])
            ->actions([
                // Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    // Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListNilais::route('/'),
            // 'create' => Pages\CreateNilai::route('/create'),
            // 'edit' => Pages\EditNilai::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->whereHas('student.user', function ($query) {
            $query->where('id', Auth::user()->id);
        })
            ->with(['alfa']);
    }
}
