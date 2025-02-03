<?php

namespace App\Filament\Resources\AkunSosmedResource\Pages;

use App\Filament\Resources\AkunSosmedResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAkunSosmed extends EditRecord
{
    protected static string $resource = AkunSosmedResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
