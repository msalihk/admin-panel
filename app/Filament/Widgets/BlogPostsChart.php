<?php

namespace App\Filament\Widgets;

use Filament\Widgets\LineChartWidget;

class BlogPostsChart extends LineChartWidget
{
    protected static ?int $sort = 3;

    protected int | string | array $columnSpan = 1;

    protected function getHeading(): string
    {
        return 'Site trafiği';
    }

    protected function getData(): array
    {
        return [
            'datasets' => [
                [
                    'label' => 'Görüntüleme Sayısı',
                    'data' => [0, 10, 21, 45, 74, 65, 77],
                ],
            ],
            'labels' => ['Pzt', 'Sal', 'Çrş', 'Perş', 'Cuma', 'Ctesi', 'Pazar'],
        ];
    }
}
