<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ContentSliderResource\Pages;
use App\Filament\Resources\ContentSliderResource\RelationManagers;
use App\Models\ContentSlider;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ContentSliderResource extends Resource
{
    protected static ?string $model = ContentSlider::class;

    protected static ?string $navigationIcon = 'heroicon-o-photo';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make('image1')->label('Image ke 1')->directory('lapangans')
                    ->required(),
                    FileUpload::make('image2')->label('Image ke 2')->directory('lapangans')
                        ->required(),
                    FileUpload::make('image3')->label('Image ke 3')->directory('lapangans')
                        ->required(),
                    FileUpload::make('image4')->label('Image ke 4')->directory('lapangans')
                        ->required(),
                    FileUpload::make('image5')->label('Image ke 5')->directory('lapangans')
                        ->required(),
            ]);
            
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image1')
                ->disk('public') // Menyatakan disk public
                ->label('Content Slider 1'),
                ImageColumn::make('image2')
                ->disk('public') // Menyatakan disk public
                ->label('Content Slider 2'),
                ImageColumn::make('image3')
                ->disk('public') // Menyatakan disk public
                ->label('Content Slider 3'),
                ImageColumn::make('image4')
                ->disk('public') // Menyatakan disk public
                ->label('Content Slider 4'),
                ImageColumn::make('image5')
                ->disk('public') // Menyatakan disk public
                ->label('Content Slider 5'),
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
            'index' => Pages\ListContentSliders::route('/'),
            // 'create' => Pages\CreateContentSlider::route('/create'),
            'edit' => Pages\EditContentSlider::route('/{record}/edit'),
        ];
    }
}
