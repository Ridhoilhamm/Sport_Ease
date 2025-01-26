<?php

namespace App\Filament\Widgets;

use Filament\Widgets\Widget;

class QuickAccess extends Widget
{
    protected static string $view = 'filament.widgets.quick-access';

    protected static ?int $sort = 1; // Urutkan widget di dashboard
}
