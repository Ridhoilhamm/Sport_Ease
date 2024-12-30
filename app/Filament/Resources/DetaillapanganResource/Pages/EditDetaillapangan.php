<?php

namespace App\Filament\Resources\DetaillapanganResource\Pages;

use App\Filament\Resources\DetaillapanganResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDetaillapangan extends EditRecord
{
    protected static string $resource = DetaillapanganResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
