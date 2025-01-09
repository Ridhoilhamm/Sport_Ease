<?php

namespace App\Filament\Resources\ContentSliderResource\Pages;

use App\Filament\Resources\ContentSliderResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListContentSliders extends ListRecords
{
    protected static string $resource = ContentSliderResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
