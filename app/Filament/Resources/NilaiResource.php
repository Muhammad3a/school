<?php

namespace App\Filament\Resources;

use Closure;
use Filament\Forms;
use Filament\Tables;
use App\Models\Nilai;
use App\Models\Priode;
use App\Models\Student;
use App\Models\Subject;
use Filament\Forms\Get;
use Filament\Forms\Form;
use App\Models\Classroom;
use Filament\Tables\Table;
use App\Models\CategoryNilai;
use Filament\Resources\Resource;
use function Pest\Laravel\options;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;

use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\NilaiResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\NilaiResource\RelationManagers;

class NilaiResource extends Resource
{
    protected static ?string $model = Nilai::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationLabel = 'Nilai';

    // public static function shouldRegisterNavigation(): bool
    // {
    //     return auth()->user()->hasRole(['admin', 'guru']);
    // }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                    ->schema([
                        Select::make('classrooms')
                            ->options(Classroom::all()->pluck('name', 'id'))
                            ->label('Kelas'),
                        Select::make('priode')
                            ->label('Periode')
                            ->searchable()
                            ->options(Priode::all()->pluck('name', 'id')),
                        Select::make('subject_id')
                            ->label('Pelajaran')
                            ->searchable()
                            ->options(Subject::all()->pluck('name', 'id')),
                        Select::make('category_nilai')
                            ->label('Kategori Nilai')
                            ->searchable()
                            ->options(CategoryNilai::all()->pluck('name', 'id')),
                        Select::make('student')
                            ->label('Murid')
                            ->searchable()
                            ->options(Student::all()->pluck('name', 'id')),
                        TextInput::make('nilai')
                            ->type('number')
                            ->live()
                            ->rules([
                                fn(Get $get): Closure => function (String $attribute, $value, Closure $fail) use ($get) {
                                    if ($get('nilai') > 100) {
                                        $fail('Nilai terlalu besar');
                                    }
                                },
                            ])

                    ])
                    ->columns(3),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('student.name')
                    ->label('Murid'),
                TextColumn::make('subject.name')
                    ->label('Pelajaran'),
                TextColumn::make('category_nilai.name')
                    ->label("Kategori Nilai"),
                TextColumn::make('nilai'),
                TextColumn::make('priode.name'),

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
            'index' => Pages\ListNilais::route('/'),
            'create' => Pages\CreateNilai::route('/create'),
            'edit' => Pages\EditNilai::route('/{record}/edit'),
        ];
    }
}
