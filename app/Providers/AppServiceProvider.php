<?php

namespace App\Providers;

use Filament\Facades\Filament;
use Filament\Navigation\NavigationGroup;
use Filament\Navigation\NavigationItem;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Model::unguard();

        Filament::serving(function () {
            // Using Vite
            Filament::registerViteTheme('resources/css/filament.css');

            // Using Laravel Mix
//            Filament::registerTheme(
//                mix('css/filament.css'),
//            );
        });


        Filament::serving(function () {
            Filament::registerNavigationItems([
                NavigationItem::make('Manşet')
                    ->url('/admin/sortings?location=1')
                    ->icon('heroicon-o-presentation-chart-line')
                    ->activeIcon('heroicon-s-presentation-chart-line')
                    ->group('Sortings')
                    ->sort(3),
                NavigationItem::make('Sağ Manşet')
                    ->url('/admin/sortings?location=2')
                    ->icon('heroicon-o-presentation-chart-line')
                    ->activeIcon('heroicon-s-presentation-chart-line')
                    ->group('Sortings')
                    ->sort(3),
            ]);
        });
    }
}
