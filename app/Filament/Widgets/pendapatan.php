<?php

namespace App\Filament\Widgets;

use App\Models\artikel;
use App\Models\Lapangan;
use App\Models\transaksi;
use App\Models\User;
use Filament\Support\Enums\IconPosition;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class Pendapatan extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Jumlah Artikel', transaksi::count())
            ->description('Artikel yang Aktive')
            ->descriptionIcon('heroicon-m-flag', IconPosition::Before)
            ->chart([1,4,5,7])
            ->color('#A9DA05'), 
            Stat::make('Pendapatan', Transaksi::whereNotNull('harga')->sum('harga'))
            ->description('Pendapatan')
            ->descriptionIcon('heroicon-m-flag', IconPosition::Before)
            ->chart([1,4,5,7])
            ->color('#A9DA05'), 
        ];
    }
}
