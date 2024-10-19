<?php

namespace App\Filament\Resources;

use stdClass;
use Filament\Forms;
use Filament\Tables;
use App\Models\Student;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\StudentHasClass;
use Filament\Infolists\Infolist;
use Filament\Resources\Resource;
use Filament\Actions\CreateAction;
use Filament\Infolists\Components;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Actions;
use Filament\Infolists\Components\Grid;
use Filament\Tables\Actions\BulkAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Contracts\HasTable;
use Filament\Forms\Components\TextInput;
use Filament\Infolists\Components\Split;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;
use Filament\Infolists\Components\Section;
use Filament\Infolists\Components\Fieldset;
use Filament\Infolists\Components\TextEntry;
use Illuminate\Database\Eloquent\Collection;
use Filament\Infolists\Components\ImageEntry;
use Filament\Resources\Pages\ListRecords\Tab;
use App\Filament\Resources\StudentResource\Pages;
use App\Filament\Resources\StudentResource\RelationManagers;
use App\Filament\Resources\StudentResource\Widgets\StatsOverview;


class StudentResource extends Resource
{
    protected static ?string $model = Student::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationLabel = 'Student';

    protected static ?string $navigationGroup = 'Akademik';

    // protected static bool $shouldRegisterNavigation = false;

    protected static ?int $navigationSort = 22;

    public static function shouldRegisterNavigation(): bool
    {
        return auth()->user()->hasRole('admin');
    }


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nis')
                    ->label('NIS'),
                TextInput::make('name')
                    ->label('Nama Siswa'),
                Select::make('gender')
                    ->options([
                        "Male" => "Pria",
                        "Female" => "Wanita"
                    ]),
                DatePicker::make('birthday')
                    ->label('Tanggal Lahir'),
                TextInput::make('contact')
                    ->label('Nomor HP'),
                FileUpload::make('profile')
                    ->image()
                    ->directory('profile'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('no')->state(
                    static function (HasTable $livewire, stdClass $rowLoop): string {
                        return (string) (
                            intval($rowLoop->iteration) +
                            (intval($livewire->getTableRecordsPerPage()) * (intval($livewire->getTablePage()) - 1))
                        );
                    }
                ),
                TextColumn::make('nis')
                    ->label('NIS'),
                TextColumn::make('name')
                    ->label('Nama Siswa')
                    ->searchable(),
                TextColumn::make('gender')
                    ->label('Jenis Kelamin')
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('birthday')
                    ->label('Tanggal Lahir')
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('contact')
                    ->label('Nomor HP'),
                ImageColumn::make('profile')
                    ->label('Profile'),
                TextColumn::make('status')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->formatStateUsing(fn(string $state): string => ucwords("{$state}"))
            ])
            ->filters([
                SelectFilter::make('status')
                    ->multiple()
                    ->options([
                        'accept' => 'Accept',
                        'off' => 'Off',
                        'move' => 'Move',
                        'grade' => 'Grade'

                    ])
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([

                Tables\Actions\BulkActionGroup::make([
                    BulkAction::make('Change Status')
                        ->icon('heroicon-m-check')
                        ->requiresConfirmation()
                        ->form([
                            Select::make('Status')
                                ->label('Status')
                                ->options(['accept' => 'Accept', 'off' => 'Off', 'move' => 'Move', 'grade' => 'Grade'])
                                ->required()
                        ])
                        ->action(function (Collection $records, array $data) {
                            $records->each(function ($records) use ($data) {
                                Student::where('id', $records->id)->update(['status' => $data['Status']]);
                            });
                        }),

                    Tables\Actions\DeleteBulkAction::make(),
                ])
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
            'index' => Pages\ListStudents::route('/'),
            'create' => Pages\CreateStudent::route('/create'),
            'edit' => Pages\EditStudent::route('/{record}/edit'),
            'view' => Pages\ViewStudent::route('/{record}')
        ];
    }

    public  static function getLabel(): ?string
    {
        $locale = app()->getLocale();

        if ($locale == 'id') {
            return "Murid";
        } else
            return "Student";
    }

    public static function infolist(Infolist $infolist): Infolist
    {

        // return $infolist
        //     ->schema([
        //         TextEntry::make('nis'),
        //         TextEntry::make('name')
        //     ]);

        return $infolist
            ->schema([
                Section::make()
                    ->schema([
                        Fieldset::make('Biodata')
                            ->schema([
                                Split::make([
                                    ImageEntry::make('profile')
                                        ->hiddenLabel()
                                        ->grow(false),
                                    Grid::make(2)
                                        ->schema([
                                            Components\Group::make([
                                                Components\TextEntry::make('nis'),
                                                Components\TextEntry::make('name'),
                                                Components\TextEntry::make('gender'),
                                                Components\TextEntry::make('birthday'),

                                            ])
                                                ->inlineLabel()
                                                ->columns(1),

                                            Components\Group::make([
                                                Components\TextEntry::make('contact'),
                                                Components\TextEntry::make('status')
                                                    ->badge()
                                                    ->color(fn(string $state): string => match ($state) {
                                                        'accept' => 'success',
                                                        'off' => 'danger',
                                                        'grade' => 'success',
                                                        'move' => 'warning',
                                                        'wait' => 'gray'
                                                    }),
                                                Components\ViewEntry::make('QRCode')
                                                    ->view('filament.resources.students.qrcode'),
                                            ])
                                                ->inlineLabel()
                                                ->columns(1),
                                        ])

                                ])->from('lg')
                            ])->columns(1)
                    ])->columns(2)
            ]);
    }

    public static function getWidgets(): array
    {
        return [
            StatsOverview::class
        ];
    }
}
