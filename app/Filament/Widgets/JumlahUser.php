<?php

namespace App\Filament\Widgets;

use App\Models\artikel;
use App\Models\Lapangan;
use App\Models\transaksi;
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
            )
            ->extraAttributes(['class' => 'custom-chart-size'])
            ,
            Stat::make('Jumlah Lapangan', Lapangan::count())
            ->description('lapangan yang tersedia')
            ->descriptionIcon('heroicon-m-flag', IconPosition::Before)
            ->chart([1,4,5,7])
            ->color('#A9DA05'), 
            Stat::make('Jumlah Artikel', artikel::count())
            ->description('Artikel yang Aktive')
            ->descriptionIcon('heroicon-m-flag', IconPosition::Before)
            ->chart([1,4,5,7])
            ->color('#A9DA05'), 
            Stat::make('Pendapatan', transaksi::sum('total_pembayaran'))  // Gunakan `sum()` untuk menghitung total pembayaran
                ->description('Total Pembayaran')
                ->descriptionIcon('heroicon-m-currency-dollar', IconPosition::Before)
                ->chart([1, 4, 5, 7])  // Contoh data chart
                ->color('#A9DA05'),
            Stat::make('Jumlah Transaksi', transaksi::count())  // Gunakan `sum()` untuk menghitung total pembayaran
                ->description('Total Pembayaran')
                ->descriptionIcon('heroicon-m-currency-dollar', IconPosition::Before)
                ->chart([1, 4, 5, 7])  // Contoh data chart
                ->color('#A9DA05')
             
           
        ];
    }
}
