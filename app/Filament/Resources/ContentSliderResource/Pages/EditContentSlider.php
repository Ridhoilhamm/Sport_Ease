<?php

namespace App\Filament\Resources\ContentSliderResource\Pages;

use App\Filament\Resources\ContentSliderResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditContentSlider extends EditRecord
{
    protected static string $resource = ContentSliderResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
