<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\Formulir;

class CalonPendaftarStats extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Calon Pendaftar', Formulir::count())
                ->description('Pendaftar'),
        ];
    }
}
