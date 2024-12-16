<?php

namespace App\Filament\Resources;

use stdClass;
use Filament\Forms;
use App\Models\User;
use Filament\Tables;
use App\Models\Teacher;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Navigation\NavigationItem;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Contracts\HasTable;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\TeacherResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\TeacherResource\RelationManagers;
use App\Filament\Resources\StudentResource\Widgets\StatsOverview;
use App\Filament\Resources\TeacherResource\RelationManagers\ClassroomRelationManager;

class TeacherResource extends Resource
{
    protected static ?string $model = Teacher::class;

    public static function getNavigationItems(): array
    {
        if (!auth()->check() || !auth()->user()->hasRole('admin')) {
            return [];
        }

        return [
            NavigationItem::make()
                ->label('Guru')
                ->icon('heroicon-o-user-group')
                ->url(static::getUrl()),
        ];
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                    ->schema([
                        TextInput::make('nip')
                            ->label('NIP')
                            ->required(),
                        TextInput::make('name')
                            ->required(),

                        TextInput::make('email')
                            ->label('Email')
                            // ->fillUsing(fn($record) => $record->user?->email)
                            ->afterStateHydrated(function (TextInput $component, $state, $record) {
                                if ($record && $record->user_id) {
                                    $user = User::find($record->user_id);
                                    $component->state($user?->email);
                                }
                            }),

                        Select::make('status')
                            ->label('Wali Kelas')
                            ->options([
                                "Ya" => "Ya",
                                "Tidak" => "Tidak"
                            ])
                            ->required(),
                        FileUpload::make('profile')
                            ->directory('teacher'),
                        // Textarea::make('address'),
                    ])->columns(2),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('no')->state(
                    static function (HasTable $livewire, stdClass $rowLoop): string {
                        return (string) (
                            $rowLoop->iteration +
                            ($livewire->getTableRecordsPerPage() * (
                                $livewire->getTablePage() - 1
                            ))
                        );
                    }
                ),
                TextColumn::make('nip')
                    ->label('NIP'),
                TextColumn::make('name'),
                TextColumn::make('email'),
                TextColumn::make('status')
                    ->label('Wali Kelas'),
                ImageColumn::make('profile')
                    ->label('Foto')
                // TextColumn::make('address'),
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
            ClassroomRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTeachers::route('/'),
            'create' => Pages\CreateTeacher::route('/create'),
            'edit' => Pages\EditTeacher::route('/{record}/edit'),
        ];
    }
    public  static function getLabel(): ?string
    {
        $locale = app()->getLocale();

        if ($locale == 'id') {
            return "Guru";
        } else
            return "Teacher";
    }
    protected function getHeaderWidgets(): array
    {
        return [
            StatsOverview::class,
        ];
    }
}
