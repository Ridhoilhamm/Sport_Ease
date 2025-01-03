<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LapanganResource\Pages;
use App\Filament\Resources\LapanganResource\RelationManagers;
use App\Models\Lapangan;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class LapanganResource extends Resource
{
    protected static ?string $model = Lapangan::class;

    protected static ?string $navigationIcon = 'heroicon-o-flag';
    protected static ?string $navigationGroup = 'kelola Lapangan';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')->label('Nama Lapangan')->placeholder('Masukan Nama Lapangan'),
                TextInput::make('jenis')->label('Jenis Lapangan')->placeholder('Masukan Jenis Lapangan'),
                FileUpload::make('foto')->label('Image')->directory('lapangans')
                    ->required(),
                TextInput::make('lokasi_tempat')->label('Lokasi')->placeholder('Masukkan Lokasi Tempat'),
                TextInput::make('harga')->label('Harga')->placeholder('Masukkan Harga')->numeric(),
                TextInput::make('fasilitas')->label('Fasilitas')->placeholder('Masukkan Fasilitas'),
                TextInput::make('deskripsi')->label('Deskripsi')->placeholder('Masukkan Deskripsi'),
                TextInput::make('jumlah_lapangan')->label('Jumlah Lapangan')->placeholder('Masukkan Lapangan')->numeric()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name'),
                TextColumn::make('jenis'),
                ImageColumn::make('foto')
                ->disk('public') // Menyatakan disk public
                ->label('Foto Lapangan'),// Label kolom
                TextColumn::make('lokasi_tempat'),
                TextColumn::make('deskripsi')
                ->limit(25),
                TextColumn::make('jumlah_lapangan'),
                TextColumn::make('fasilitas'),
                TextColumn::make('harga')
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListLapangans::route('/'),
            'create' => Pages\CreateLapangan::route('/create'),
            'edit' => Pages\EditLapangan::route('/{record}/edit'),
        ];
    }
}
