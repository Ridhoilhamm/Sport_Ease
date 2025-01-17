<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ArtikelResource\Pages;
use App\Filament\Resources\ArtikelResource\RelationManagers;
use App\Models\Artikel;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use PhpParser\Node\Stmt\Label;

class ArtikelResource extends Resource
{
    protected static ?string $model = Artikel::class;
    protected static ?string $navigationGroup = 'Kelola Artikel';
    protected static ?string $navigationIcon = 'heroicon-o-newspaper';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
               TextInput::make('judul_artikel')->label('Masukkan Nama Artikel')->Placeholder('Nama Artikel'),
               FileUpload::make('image_artikel'),
               TextInput::make('isi_artikel')->label('Masukkan Isi Artikel')->placeholder("Isi Artikel")
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('judul_artikel')
                ->alignCenter(),
                ImageColumn::make('image_artikel')
                ->alignCenter()
                ->disk('public'),
                TextColumn::make('isi_artikel')
                ->alignCenter()
                ->limit(50),
                TextColumn::make('status')
                ->alignCenter()
                    ->label('Status')
                    ->badge()
                    ->colors([
                        'success' => true,
                        'danger' => false,
                    ])
                    ->formatStateUsing(fn ($state) => $state ? 'Aktif' : 'Nonaktif'),
            ])
            ->actions([
                Tables\Actions\EditAction::make()->label(''),
                Tables\Actions\DeleteAction::make()->label(''),
                Tables\Actions\Action::make('toggleStatus')
                    ->label('status')
                    ->action(function ($record) {
                        $record->update(['status' => !$record->status]);
                    })
                    ->icon(fn ($record) => $record->status ? 'heroicon-s-check-circle' : 'heroicon-s-x-circle')
                    ->color(fn ($record) => $record->status ? 'success' : 'danger'),
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
            'index' => Pages\ListArtikels::route('/'),
            'create' => Pages\CreateArtikel::route('/create'),
            'edit' => Pages\EditArtikel::route('/{record}/edit'),
        ];
    }
}
