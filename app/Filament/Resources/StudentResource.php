<?php

namespace App\Filament\Resources;

use stdClass;
use Filament\Forms;
use App\Models\User;
use Filament\Tables;
use App\Models\Student;
use App\Models\Classroom;
use Filament\Tables\Table;
use App\Models\Departement;
use App\Models\StudentHasClass;
use Filament\Infolists\Infolist;
use Filament\Resources\Resource;
use Filament\Actions\CreateAction;
use Filament\Infolists\Components;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Actions;
use Filament\Forms\Components\Textarea;
use Filament\Infolists\Components\Grid;
use Filament\Navigation\NavigationItem;
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
use App\Models\kelas;

class StudentResource extends Resource
{
    protected static ?string $model = Student::class;

    protected static ?string $navigationIcon = 'heroicon-o-user';

    protected static ?string $navigationLabel = 'Murid';



    public static function shouldRegisterNavigation(): bool
    {
        return auth()->user()->hasRole('admin', 'wali kelas');
    }
    public static function query(): Builder
    {
        return parent::query()->with(['classroom', 'departements']);
    }

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                TextInput::make('nis')
                    ->label('NIS')
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

                TextInput::make('nisn')
                    ->label('NISN')
                    ->required(),

                TextInput::make('name')
                    ->label('Nama Siswa')
                    ->required(),

                Select::make('gender')
                    ->options([
                        "Laki - Laki" => "Laki - Laki",
                        "Perempuan" => "Perempuan"
                    ])
                    ->required(),

                TextInput::make('tempatl')
                    ->label('Tempat lahir'),

                DatePicker::make('birthday')
                    ->label('Tanggal Lahir'),

                Select::make('agama')
                    ->options([
                        'Islam' => "Islam",
                        'Katolik' => "Katolik",
                        'Protestan' => "Protestan",
                        'Hindu' => 'Hindu',
                        'Buddha' => "Buddha",
                        'Khonghucu' => "Khonghucu"
                    ])
                    ->required(),

                Select::make('kwnegara')
                    ->label('Kewarganegaraan')
                    ->options([
                        'Warga Negara Indonesia' => "Warga Negara Indonesia",
                        'Kewarganegaraan Asing' => "Kewarganegaraan Asing"
                    ])
                    ->required(),

                TextInput::make('statusdk')
                    ->label('Status Dalam Keluarga'),

                Select::make('anakke')
                    ->options([
                        '1' => "1",
                        '2' => "2",
                        '3' => "3",
                        '4' => "4",
                        '5' => "5",
                        '6' => "6",
                        '7' => "7",
                        '8' => "8",
                        '9' => "9",
                        '10' => "10"
                    ])
                    ->label('Anak Ke-'),

                Textarea::make('alamat'),

                TextInput::make('contact')
                    ->label('No. Tlp/HP'),

                TextInput::make('asekolah')
                    ->label('Asal Sekolah'),

                Select::make('classroom_id')
                    ->options(kelas::all()->pluck('name_kelas', 'id')->filter())
                    ->label('Kelas'),

                Select::make('departement_id')
                    ->options(Departement::all()->pluck('name_department', 'id')->filter())
                    ->label('Jurusan'),

                TextInput::make('nayah')
                    ->label('Nama Ayah'),

                TextInput::make('nibu')
                    ->label('Nama Ibu'),

                TextInput::make('pkrjnayah')
                    ->label('Pekerjaan Ayah'),

                TextInput::make('pkrjnibu')
                    ->label('Pekerjaan Ibu'),

                Textarea::make('alamatot')
                    ->label('Alamat Orang Tua'),

                TextInput::make('contactot')
                    ->label('No. Tlp/Hp Orang Tua'),

                TextInput::make('nwali')
                    ->label('Nama Wali'),

                TextInput::make('pkrjnwali')
                    ->label('Pekerjaan Wali'),

                Textarea::make('alamatwali')
                    ->label('Alamat Wali'),

                TextInput::make('contactw')
                    ->label('No. Tlp/HP Wali'),

                Select::make('status')
                    ->options([
                        'aktif'  => 'Aktif',
                        'off'    => 'Off',
                        'pindah' => 'Pindah',
                        'arsip'  => 'Arsip',
                    ])
                    ->required(),

                FileUpload::make('profile')
                    ->image()
                    ->directory('profile')
                    ->label('Foto Murid'),
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

                TextColumn::make('nisn')
                    ->label('NISN'),

                TextColumn::make('name')
                    ->label('Nama Lengkap')
                    ->searchable(),

                TextColumn::make('email'),

                TextColumn::make('gender')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->label('Jenis Kelamin'),
                // ->toggleable(isToggledHiddenByDefault: true)

                TextColumn::make('tempatl')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->label('Tempat Lahir'),

                TextColumn::make('birthday')
                    ->label('Tanggal Lahir'),
                // ->toggleable(isToggledHiddenByDefault: true)

                TextColumn::make('agama')
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('kwnegara')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->label('Kewarganegaraan')
                    ->wrap(),

                TextColumn::make('statusdk')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->label('Status Dalam Keluarga')
                    ->wrap(),

                TextColumn::make('anakke')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->label('Anak Ke'),

                TextColumn::make('alamat')
                    ->wrap(),

                TextColumn::make('contact')
                    ->label('No. Tlp/HP'),

                TextColumn::make('asekolah')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->label('Asal Sekolah'),

                TextColumn::make('kelas.name_kelas')
                    ->label('Kelas')
                    ->searchable(),

                TextColumn::make('departements.name_department')
                    // ->toggleable(isToggledHiddenByDefault: true)
                    ->label('Jurusan'),

                TextColumn::make('nayah')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->label('Nama Ayah'),

                TextColumn::make('nibu')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->label('Nama Ibu'),

                TextColumn::make('pkrjnayah')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->label('Pekerjaan Ayah'),

                TextColumn::make('pkrjnibu')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->label('Pekerjaan Ibu'),

                TextColumn::make('alamatot')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->label('Alamat Orang Tua')
                    ->wrap(),

                TextColumn::make('contactot')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->label('No. Tlp/Hp'),

                TextColumn::make('nwali')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->label('Nama Wali'),

                TextColumn::make('pkrjnwali')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->label('Pekerjaan Wali'),

                TextColumn::make('alamatwali')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->label('Alamat Wali')
                    ->wrap(),

                TextColumn::make('contactw')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->label('No. Tlp/Hp Wali'),

                TextColumn::make('status')
                    ->formatStateUsing(fn(string $state): string => ucwords("{$state}")),

                ImageColumn::make('profile')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->label('Foto'),

            ])
            ->filters([
                SelectFilter::make('status')
                    ->multiple()
                    ->options([
                        'aktif' => 'Aktif',
                        'off' => 'Off',
                        'pindah' => 'Pindah',
                        'arsip' => 'Arsip'

                    ])
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([

                Tables\Actions\BulkActionGroup::make([
                    BulkAction::make('Arsipkan')
                        ->icon('heroicon-m-check')
                        ->requiresConfirmation()
                        ->action(function (Collection $records) {
                            $records->each(function ($student) {
                                if ($student->status === 'arsip') {
                                    // Pindahkan data ke tabel arsip
                                    \App\Models\ArchivedStudent::create([
                                        'nis' => $student->nis,
                                        'email' => $student->email,
                                        'nisn' => $student->nisn,
                                        'name' => $student->name,
                                        'gender' => $student->gender,
                                        'tempatl' => $student->tempatl,
                                        'birthday' => $student->birthday,
                                        'agama' => $student->agama,
                                        'kwnegara' => $student->kwnegara,
                                        'statusdk' => $student->statusdk,
                                        'anakke' => $student->anakke,
                                        'alamat' => $student->alamat,
                                        'contact' => $student->contact,
                                        'asekolah' => $student->asekolah,
                                        'classroom_id' => $student->classroom_id,
                                        'departement_id' => $student->departement_id,
                                        'nayah' => $student->nayah,
                                        'nibu' => $student->nibu,
                                        'pkrjnayah' => $student->pkrjnayah,
                                        'pkrjnibu' => $student->pkrjnibu,
                                        'alamatot' => $student->alamatot,
                                        'contactot' => $student->contactot,
                                        'nwali' => $student->nwali,
                                        'pkrjnwali' => $student->pkrjnwali,
                                        'alamatwali' => $student->alamatwali,
                                        'contactw' => $student->contactw,
                                        'status' => $student->status,
                                        'profile' => $student->profile,


                                    ]);

                                    // Hapus data dari tabel student
                                    $student->delete();
                                }
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
            'view' => Pages\ViewStudent::route('/{record}'),
            'raport' => Pages\RaportPage::route('/{record}/raport'),


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
                                                        'aktif' => 'success',
                                                        'off' => 'danger',
                                                        'pindah' => 'warning',
                                                        'arsip' => 'gray'
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
