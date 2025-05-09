<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\Penghuni;

class PenghuniStats extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Penghuni', Penghuni::count())
                ->description('Pendaftar'),
        ];
    }
}
