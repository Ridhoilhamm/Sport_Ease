<?php

namespace App\Filament\Widgets;

use App\Models\Lapangan;
use App\Models\User;
use Filament\Support\Enums\IconPosition;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class JumlahUser extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Jumlah User', User::count())
            ->description('user yang sudah login')
            ->descriptionIcon('heroicon-m-user-group',IconPosition::Before)
            ->chart([1,4,5,7])
            ->color(
                '#A9DA05'
            ),
            Stat::make('Jumlah Lapangan', Lapangan::count())
            ->description('lapangan yang tersedia')
            ->descriptionIcon('heroicon-m-flag', IconPosition::Before)
            ->chart([1,4,5,7])
            ->color('#A9DA05'), 
        ];
    }
}
