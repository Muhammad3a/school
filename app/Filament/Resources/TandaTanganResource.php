<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Kelas;
use App\Models\Student;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\TandaTangan;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Navigation\NavigationItem;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\TandaTanganResource\Pages;
use App\Filament\Resources\TandaTanganResource\RelationManagers;

class TandaTanganResource extends Resource
{
    protected static ?string $model = TandaTangan::class;

    public static function getNavigationItems(): array
    {
        if (!auth()->check() || !auth()->user()->hasRole('admin')) {
            return [];
        }

        return [
            NavigationItem::make()
                ->label('Tanda Tangan')
                ->icon('heroicon-o-user-group')
                ->url(static::getUrl()),
        ];
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('teacher_id')
                    ->label('Nama Guru')
                    ->relationship('teacher', 'name') // Pastikan kolom `name` ada di tabel `students`
                    ->nullable()
                    ->searchable(),
                TextInput::make('role')
                    ->label('Role')
                    ->placeholder('Masukkan peran (contoh: wali_kelas, kepala_sekolah)')
                    ->required(),
                Select::make('student_id')
                    ->label('Siswa')
                    ->relationship('student', 'name') // Pastikan kolom `name` ada di tabel `students`
                    ->nullable()
                    ->searchable(),
                Select::make('kelas_id')
                    ->label('Kelas')
                    ->relationship('kelas', 'name_kelas') // Pastikan kolom `name` ada di tabel `kelas`
                    ->nullable()
                    ->searchable(),
                FileUpload::make('path')
                    ->label('Tanda Tangan')
                    ->image()
                    ->directory('tanda_tangan')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('teacher.name')
                    ->label('Nama Guru')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('role')
                    ->label('Role')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('student.name')
                    ->label('Nama Siswa')
                    ->sortable()
                    ->searchable()
                    ->toggleable(),
                TextColumn::make('kelas.name_kelas')
                    ->label('Kelas')
                    ->sortable()
                    ->toggleable(),
                ImageColumn::make('path')
                    ->label('Tanda Tangan')
                    ->size(50),
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
            'index' => Pages\ListTandaTangans::route('/'),
            'create' => Pages\CreateTandaTangan::route('/create'),
            'edit' => Pages\EditTandaTangan::route('/{record}/edit'),
        ];
    }
}
