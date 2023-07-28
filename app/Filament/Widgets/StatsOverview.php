<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class StatsOverview extends BaseWidget
{
    protected function getCards(): array
    {
        return [
            Card::make('Benzersiz görüntüleme', '192.1k'),
            Card::make('Anında terk oranı', '21%'),
            Card::make('Sayfada geçirilen ortalama süre', '3 dakika 12 saniye'),
        ];
    }
}
