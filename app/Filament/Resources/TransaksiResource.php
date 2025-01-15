<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TransaksiResource\Pages;
use App\Filament\Resources\TransaksiResource\RelationManagers;
use App\Models\Transaksi;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TransaksiResource extends Resource
{
    protected static ?string $model = Transaksi::class;

    protected static ?string $navigationIcon = 'heroicon-o-banknotes';
    protected static ?string $navigationGroup = 'kelola Transaksi';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id_user'),
                TextColumn::make('lapangan'),
                TextColumn::make('tanggal_sewa'),
                TextColumn::make('jam_sewa'),
                ImageColumn::make('bukti_pembayaran')
                ->size(150)
                ->disk('public') // Menyatakan disk public
                ->label('foto'),
                TextColumn::make('created_at')->label('Di buat'),
                TextColumn::make('total_pembayaran'),
                TextColumn::make('status')
            ])
            ->filters([
                //
            ])
            ->actions([

                Tables\Actions\Action::make('approvePending')
                    ->label('Approve')
                    ->action(function ($record) {
                        // Logika untuk mengubah status menjadi 'menunggu hari'
                        $record->update(['status' => 'menunggu hari']);
                    })
                    ->color('success') // Menentukan warna tombol approve
                    ->icon('heroicon-s-check-circle') // Menambahkan ikon
                    ->visible(function ($record) {
                        // Hanya tampilkan tombol approve jika status masih 'pending'
                        return $record->status === 'pending';
                    }),
                Tables\Actions\Action::make('approveCompleted')
                    ->label('Akhiri Transaksi')
                    ->action(function ($record) {
                        // Logika untuk mengubah status menjadi 'selesai'
                        $record->update(['status' => 'selesai']);
                    })
                    ->color('success') // Menentukan warna tombol approve
                    ->icon('heroicon-s-check-circle') // Menambahkan ikon
                    ->visible(function ($record) {
                        // Hanya tampilkan tombol approve jika status masih 'menunggu hari'
                        return $record->status === 'menunggu hari';
                    }),
                Tables\Actions\EditAction::make()->label('')
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
            'index' => Pages\ListTransaksis::route('/'),
            'create' => Pages\CreateTransaksi::route('/create'),
            'edit' => Pages\EditTransaksi::route('/{record}/edit'),
        ];
    }
}
