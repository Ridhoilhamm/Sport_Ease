<?php

namespace App\Filament\Resources\AkunSosmedResource\Pages;

use App\Filament\Resources\AkunSosmedResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAkunSosmeds extends ListRecords
{
    protected static string $resource = AkunSosmedResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
