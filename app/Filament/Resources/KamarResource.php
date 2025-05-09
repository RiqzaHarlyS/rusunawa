<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KamarResource\Pages;
use App\Filament\Resources\KamarResource\RelationManagers;
use App\Models\Kamar;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class KamarResource extends Resource
{
    protected static ?string $model = Kamar::class;
    protected static ?string $navigationLabel = 'Kamar';
    protected static ?string $pluralLabel = 'Daftar Kamar';
    protected static ?string $modelLabel = 'Daftar Kamar';
    protected static ?string $navigationIcon = 'heroicon-o-home';
    protected static ?string $navigationGroup = 'Aset';
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nomor_kamar')
                    ->label('Nomor Kamar')
                    ->required()
                    ->maxLength(10),
    
                Forms\Components\TextInput::make('lantai')
                    ->label('Lantai')
                    ->required()
                    ->maxLength(10),
    
                Forms\Components\TextInput::make('kapasitas')
                    ->label('Kapasitas')
                    ->required()
                    ->numeric(),
    
                // Admin hanya bisa input status kamar secara manual, tetapi ini hanya sebagai cadangan.
                Forms\Components\Select::make('status')
                    ->label('Status')
                    ->options([
                        'Tersedia' => 'Tersedia',
                        'Penuh' => 'Penuh',
                        'Pemeliharaan' => 'Pemeliharaan',
                    ])
                    ->required(),
            ]);
    }
    

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nomor_kamar')->label('Nomor Kamar'),
                TextColumn::make('lantai'),
                TextColumn::make('kapasitas'),
                TextColumn::make('status'),
            ])
            ->defaultSort('nomor_kamar')
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListKamars::route('/'),
            'create' => Pages\CreateKamar::route('/create'),
            'edit' => Pages\EditKamar::route('/{record}/edit'),
        ];
    }
}
