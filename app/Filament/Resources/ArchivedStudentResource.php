<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\ArchivedStudent;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Navigation\NavigationItem;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ArchivedStudentResource\Pages;
use App\Filament\Resources\ArchivedStudentResource\RelationManagers;

class ArchivedStudentResource extends Resource
{
    protected static ?string $model = ArchivedStudent::class;

    public static function getNavigationItems(): array
    {
        if (!auth()->check() || !auth()->user()->hasRole('wali kelas')) {
            return [];
        }

        return [
            NavigationItem::make()
                ->label('Arsip Siswa')
                ->icon('heroicon-o-rectangle-stack')
                ->url(static::getUrl()),
        ];
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nis')->required(),
                TextInput::make('name')->required(),
                TextInput::make('email')->email(),
                Select::make('status')
                    ->options([
                        'arsip' => 'Arsip',
                        'aktif' => 'Aktif',
                    ])
                    ->required(),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nis')->sortable()->label('NIS'),
                TextColumn::make('nisn')
                    ->label('NISN'),
                TextColumn::make('name')
                    ->label('Nama Lengkap')
                    ->searchable(),
                TextColumn::make('status')->sortable(),
                TextColumn::make('created_at')->label('Archived At')->dateTime(),
                TextColumn::make('nis')
                    ->label('NIS'),



                TextColumn::make('email')
                    ->toggleable(isToggledHiddenByDefault: true),

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

                TextColumn::make('classroom_id.name')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->label('Kelas'),

                TextColumn::make('departement_id.name_department')
                    ->toggleable(isToggledHiddenByDefault: true)
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
                //
            ])
            ->actions([
                // Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListArchivedStudents::route('/'),
            // 'create' => Pages\CreateArchivedStudent::route('/create'),
            // 'edit' => Pages\EditArchivedStudent::route('/{record}/edit'),
        ];
    }
}
