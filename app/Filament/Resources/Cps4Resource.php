<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\Cps4;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\Cps4Resource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\Cps4Resource\RelationManagers;

class Cps4Resource extends Resource
{
    protected static ?string $model = Cps4::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationLabel = 'Capaian Semester 4';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Textarea::make('pai')
                ->label('Pendidikan Agama Islam dan Budi Pekerti'),
            Textarea::make('pp')
                ->label('Pendidikan Pancasila '),
            Textarea::make('indo')
                ->label('Bahasa Indonesia'),
            Textarea::make('pjok')
                ->label('Pendidikan Jasmani, Olahraga, dan Kesehatan'),
            Textarea::make('sejarah')
                ->label('Sejarah'),
            Textarea::make('sb')
                ->label('Seni Budaya'),
            Textarea::make('sunda')
                ->label('Bahasa Sunda'),
            Textarea::make('arab')
                ->label('Bahasa Arab'),
            Textarea::make('mtk')
                ->label('Matematika'),
            Textarea::make('inggris')
                ->label('Bahasa Inggris'),
            Textarea::make('informatika')
                ->label('Informatika/ Simulasi & Komunikasi Digital'),
            Textarea::make('fisika')
                ->label('Fisika'),
            Textarea::make('kimia')
                ->label('Kimia'),
            Textarea::make('bisnis')
                ->label('Proses Bisnis dan K3LH'),
            Textarea::make('profesi')
                ->label('Profesi dan Kewirausahaan'),
            Textarea::make('pemtur')
                ->label('Pemrograman Terstruktur'),
            Textarea::make('pbo')
                ->label('Pemrograman Berorientasi Objek'),
            Textarea::make('gim')
                ->label('Orientasi Dasar Pengembangan Perangkat Lunak dan Gim'),
            Textarea::make('bd')
                ->label('Basis Data'),
            Textarea::make('pbt')
                ->label('Pemrograman Berbasis Teknologi'),
            Textarea::make('pw')
                ->label('Pemrograman Web'),
            Textarea::make('ppb')
                ->label('Pemrograman Perangkat Bergerak'),
            Textarea::make('pkk')
                ->label('Produk Kreatif & Kewirausahaan '),
            Textarea::make('kb')
                ->label('Kecerdasan Buatan'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('pai')
                ->label('Pendidikan Agama Islam dan Budi Pekerti')
                ->wrap(),
            TextColumn::make('pp')
                ->label('Pendidikan Pancasila ')
                ->wrap(),
            TextColumn::make('indo')
                ->label('Bahasa Indonesia')
                ->wrap(),
            TextColumn::make('pjok')
                ->label('Pendidikan Jasmani, Olahraga, dan Kesehatan')
                ->wrap(),
            TextColumn::make('sejarah')
                ->label('Pendidikan Sejarah')
                ->wrap(),
            TextColumn::make('sb')
                ->label('Seni Budaya')
                ->wrap(),
            TextColumn::make('sunda')
                ->label('Bahasa Sunda')
                ->wrap(),
            TextColumn::make('arab')
                ->label('Bahasa Arab')
                ->wrap(),
            TextColumn::make('mtk')
                ->label('Matematika')
                ->wrap(),
            TextColumn::make('inggris')
                ->label('Bahasa Inggris')
                ->wrap(),
            TextColumn::make('informatika')
                ->label('Informatika/ Simulasi & Komunikasi Digital')
                ->wrap(),
            TextColumn::make('fisika')
                ->label('Fisika')
                ->wrap(),
            TextColumn::make('kimia')
                ->label('Kimia')
                ->wrap(),
            TextColumn::make('bisnis')
                ->label('Proses Bisnis dan K3LH')
                ->wrap(),
            TextColumn::make('profesi')
                ->label('Profesi dan Kewirausahaan')
                ->wrap(),
            TextColumn::make('pemtur')
                ->label('Pemrograman Terstruktur')
                ->wrap(),
            TextColumn::make('pbo')
                ->label('Pemrograman Berorientasi Objek')
                ->wrap(),
            TextColumn::make('gim')
                ->label('Orientasi Dasar Pengembangan Perangkat Lunak dan Gim')
                ->wrap(),
            TextColumn::make('bd')
                ->label('Basis Data')
                ->wrap(),
            TextColumn::make('pbt')
                ->label('Pemrograman Berbasis Teks, Grafis, dan Multimedia')
                ->wrap(),
            TextColumn::make('pw')
                ->label('Pemrograman Web')
                ->wrap(),
            TextColumn::make('ppb')
                ->label('Pemrograman Perangkat Bergerak')
                ->wrap(),
            TextColumn::make('pkk')
                ->label('Produk Kreatif & Kewirausahaan ')
                ->wrap(),
            TextColumn::make('kb')
                ->label('Kecerdasan Buatan')
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
            'index' => Pages\ListCps4s::route('/'),
            'create' => Pages\CreateCps4::route('/create'),
            'edit' => Pages\EditCps4::route('/{record}/edit'),
        ];
    }
}
