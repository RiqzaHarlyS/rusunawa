<?php

namespace App\Filament\Resources\CalonPendaftarResource\Pages;

use App\Filament\Resources\CalonPendaftarResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCalonPendaftar extends EditRecord
{
    protected static string $resource = CalonPendaftarResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
