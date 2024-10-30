<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Subject;
use Filament\Forms\Form;
use App\Models\CpSemester;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use function Laravel\Prompts\textarea;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;

use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\CpSemesterResource\Pages;
use App\Filament\Resources\CpSemesterResource\RelationManagers;

class CpSemesterResource extends Resource
{
    protected static ?string $model = CpSemester::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationLabel = 'Capaian Pembelajaran';

    public static function shouldRegisterNavigation(): bool
    {
        return auth()->user()->hasRole('admin');
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('subject_id')
                    ->label('Pelajaran')
                    ->searchable()
                    ->options(Subject::whereNotNull('name')->pluck('name', 'id')),

                Select::make('pelajarankejuruan_id')
                    ->label('Pelajaran Kejuruan')
                    ->searchable()
                    ->options(\App\Models\PelajaranKejuruan::whereNotNull('bidang')->pluck('bidang', 'id')),



                Textarea::make('sm1'),
                Textarea::make('sm2'),
                Textarea::make('sm3'),
                Textarea::make('sm4'),
                Textarea::make('sm5'),
                Textarea::make('sm6'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([

                TextColumn::make('subject.name')
                    ->label('Pelajaran')
                    ->wrap(),
                TextColumn::make('pelajarankejuruan.bidang')
                    ->label('Bidang'),
                TextColumn::make('sm1')
                    ->wrap(),
                TextColumn::make('sm2')
                    ->wrap(),
                TextColumn::make('sm3')
                    ->wrap(),
                TextColumn::make('sm4')
                    ->wrap(),
                TextColumn::make('sm5')
                    ->wrap(),
                TextColumn::make('sm6')
                    ->wrap(),
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
            ])
            ->defaultPaginationPageOption(10);
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
            'index' => Pages\ListCpSemesters::route('/'),
            'create' => Pages\CreateCpSemester::route('/create'),
            'edit' => Pages\EditCpSemester::route('/{record}/edit'),
        ];
    }
    public  static function getLabel(): ?string
    {
        $locale = app()->getLocale();

        if ($locale == 'id') {
            return "Capaian Semester";
        } else
            return "Teacher";
    }
}
