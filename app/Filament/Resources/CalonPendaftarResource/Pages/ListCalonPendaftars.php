<?php

namespace App\Filament\Resources\CalonPendaftarResource\Pages;

use App\Filament\Resources\CalonPendaftarResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCalonPendaftars extends ListRecords
{
    protected static string $resource = CalonPendaftarResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // Actions\CreateAction::make(),
        ];
    }
}
