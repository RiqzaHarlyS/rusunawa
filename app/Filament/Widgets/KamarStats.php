<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\Kamar;

class KamarStats extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Kamar', Kamar::count())
                ->description('Pendaftar'),
        ];
    }
}
