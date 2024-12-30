<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DetaillapanganResource\Pages;
use App\Filament\Resources\DetaillapanganResource\RelationManagers;
use App\Models\Detaillapangan;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DetaillapanganResource extends Resource
{
    protected static ?string $model = Detaillapangan::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'kelola Lapangan';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('deskripsi')->label('Deskripsi Lapangan')->placeholder('Masukkan Deskripsi Lapangan'),
                TextInput::make('fasilitas')->label('Fasilitas Lapangan')->placeholder('Masukkan Fasilitas Lapangan'),
                TextInput::make('gambar')->label('Gambar Lapangan')->placeholder('Masukkan Detail Gambar Lapangan'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
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
            'index' => Pages\ListDetaillapangans::route('/'),
            'create' => Pages\CreateDetaillapangan::route('/create'),
            'edit' => Pages\EditDetaillapangan::route('/{record}/edit'),
        ];
    }
}
