<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AkunSosmedResource\Pages;
use App\Filament\Resources\AkunSosmedResource\RelationManagers;
use App\Models\AkunSosmed;
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

class AkunSosmedResource extends Resource
{
    protected static ?string $model = AkunSosmed::class;

    protected static ?string $navigationIcon = 'heroicon-o-circle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')->label('Masukkan Akun Sosial Media')->Placeholder('Akun Sosial Media'),
                FileUpload::make('foto')->label('Gambar Bae')->default(fn ($record) => $record?->foto),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                ->label('Nama Sosial Media')
                ->alignCenter(),
                ImageColumn::make('foto')
                ->label('Logo Sosial Media')
                ->alignCenter()
                ->disk('public'),
            ])
            ->filters([
                //
            ])
            ->actions([
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
            'index' => Pages\ListAkunSosmeds::route('/'),
            'create' => Pages\CreateAkunSosmed::route('/create'),
            'edit' => Pages\EditAkunSosmed::route('/{record}/edit'),
        ];
    }
}
