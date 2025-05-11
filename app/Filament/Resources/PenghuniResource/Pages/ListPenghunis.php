<?php

namespace App\Filament\Resources\PenghuniResource\Pages;

use App\Filament\Resources\PenghuniResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use App\Models\Penghuni;

class ListPenghunis extends ListRecords
{
    protected static string $resource = PenghuniResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }

    protected function getTableQuery(): \Illuminate\Database\Eloquent\Builder
    {
        return Penghuni::with(['formulir', 'kamar']);
    }
}
