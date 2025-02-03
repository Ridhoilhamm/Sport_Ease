<?php

namespace App\Providers;

use App\Filament\Resources\TransaksiResource;
use App\Models\artikel;
use App\Models\transaksi;
use App\Models\User;
use BezhanSalleh\FilamentLanguageSwitch\LanguageSwitch;
use Filament\Facades\Filament;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
       
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        LanguageSwitch::configureUsing(function (LanguageSwitch $switch) {
            $switch
                ->locales(['id','en']); // also accepts a closure
                
        });
    }
}
