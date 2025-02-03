<?php

namespace App\Filament\Widgets;

use App\Models\Transaksi;
use Filament\Widgets\ChartWidget as BaseChartWidget; // Alias untuk Filament ChartWidget
use Illuminate\Support\Facades\DB;

class ChartWidget extends BaseChartWidget
{
    protected static ?string $heading = 'Transaksi';

    protected function getData(): array
    {
        $data = Transaksi::select(DB::raw('DATE(created_at) as date'), DB::raw('count(*) as count'))
            ->groupBy(DB::raw('DATE(created_at)'))
            ->orderBy('date', 'asc')
            ->get();
        $labels = $data->pluck('date');
        $counts = $data->pluck('count');

        return [
            'labels' => $labels,
            'datasets' => [
                [
                    'label' => 'Jumlah Transaksi',
                    'data' => $counts,
                    'borderColor' => '#42A5F5',
                    'backgroundColor' => 'rgba(66, 165, 245, 0.2)',
                    'fill' => true,
                ]
            ],
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }

    protected static int $order = 3;
}


