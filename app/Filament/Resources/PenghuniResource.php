<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PenghuniResource\Pages;
use App\Models\Penghuni;
use App\Models\Kamar;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;

class PenghuniResource extends Resource
{
    protected static ?string $model = Penghuni::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';
    protected static ?string $navigationLabel = 'Penghuni';
    protected static ?string $pluralLabel = 'Daftar Penghuni';
    protected static ?string $modelLabel = 'Daftar Penghuni';
    protected static ?string $navigationGroup = 'Aset';

    public static function form(\Filament\Forms\Form $form): \Filament\Forms\Form
    {
        return $form->schema([]); // Tidak ada form karena hanya readonly
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('formulir.nama_lengkap')->label('Nama Lengkap'),
                TextColumn::make('formulir.npm')->label('NPM'),
                TextColumn::make('formulir.jurusan')->label('Jurusan'),
                TextColumn::make('kamar.nomor_kamar')->label('Kamar'),
                TextColumn::make('tahun_masuk')->label('Tahun Masuk'),
            ])
            ->defaultSort('tahun_masuk', 'desc')
            ->actions([])
            ->bulkActions([]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPenghunis::route('/'),
        ];
    }
}
