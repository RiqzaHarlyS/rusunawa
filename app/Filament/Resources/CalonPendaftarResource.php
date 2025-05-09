<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CalonPendaftarResource\Pages;
use App\Filament\Resources\CalonPendaftarResource\RelationManagers;
use App\Models\Formulir;
use App\Models\Kamar;
use App\Models\Penghuni;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Actions\Action;
use Illuminate\Support\Facades\Log; // Import log
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CalonPendaftarResource extends Resource
{
    protected static ?string $model = Formulir::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'Calon Pendaftar';
    protected static ?string $pluralLabel = 'Calon Pendaftar';
    protected static ?string $modelLabel = 'Calon Pendaftar';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // Tambahkan field lain jika diperlukan
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama_lengkap')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('npm')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('jurusan')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('fakultas')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('alamat')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('desa')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('kota')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('provinsi')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('nomor_whatsapp')->label('No. WhatsApp')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('email')->sortable()->searchable(),

                Tables\Columns\TextColumn::make('ktp')
                    ->label('KTP')
                    ->formatStateUsing(fn ($state) => $state ? 'Lihat File' : '-')
                    ->url(fn ($record) => $record->ktp ? asset('storage/' . $record->ktp) : null)
                    ->openUrlInNewTab(),

                Tables\Columns\TextColumn::make('kk')
                    ->label('KK')
                    ->formatStateUsing(fn ($state) => $state ? 'Lihat File' : '-')
                    ->url(fn ($record) => $record->kk ? asset('storage/' . $record->kk) : null)
                    ->openUrlInNewTab(),

                Tables\Columns\TextColumn::make('formulir')
                    ->label('Formulir')
                    ->formatStateUsing(fn ($state) => $state ? 'Lihat File' : '-')
                    ->url(fn ($record) => $record->formulir ? asset('storage/' . $record->formulir) : null)
                    ->openUrlInNewTab(),

                Tables\Columns\TextColumn::make('kontrak')
                    ->label('Kontrak')
                    ->formatStateUsing(fn ($state) => $state ? 'Lihat File' : '-')
                    ->url(fn ($record) => $record->kontrak ? asset('storage/' . $record->kontrak) : null)
                    ->openUrlInNewTab(),
            ])
            ->filters([
                // Filter jika diperlukan, misalnya filter berdasarkan fakultas atau jurusan
            ])
            ->actions([
                Action::make('acc')
                    ->label('Acc')
                    ->action(function (Formulir $record) {
                        // Pilih kamar yang tersedia
                        $kamar = Kamar::where('status', 'Tersedia')->first();

                        if ($kamar) {
                            // Mengecek jumlah penghuni yang sudah ada di kamar tersebut
                            $jumlahPenghuni = $kamar->penghuni()->count();

                            if ($jumlahPenghuni < $kamar->kapasitas) {
                                // Pindahkan data ke Penghuni
                                Penghuni::create([
                                    'formulir_npm' => $record->npm,
                                    'kamar_id' => $kamar->id,
                                    'tahun_masuk' => '20' . substr($record->npm, 0, 2), // Contoh cara mendapatkan tahun masuk
                                ]);

                                // Log tindakan pendaftaran
                                Log::info('Pendaftar dengan NPM ' . $record->npm . ' diterima dan dipindahkan ke kamar ' . $kamar->nomor_kamar);

                                // Jika jumlah penghuni sudah mencapai kapasitas, ubah status kamar menjadi penuh
                                if ($kamar->penghuni()->count() == $kamar->kapasitas) {
                                    $kamar->update(['status' => 'Penuh']);
                                }

                                // Hapus data calon pendaftar yang diterima
                                $record->delete();
                            } else {
                                // Jika kamar penuh
                                Log::warning('Kamar ' . $kamar->nomor_kamar . ' sudah penuh untuk pendaftar dengan NPM ' . $record->npm);
                                return back()->with('error', 'Kamar sudah penuh.');
                            }
                        } else {
                            // Jika tidak ada kamar yang tersedia
                            Log::error('Tidak ada kamar yang tersedia untuk pendaftar dengan NPM ' . $record->npm);
                            return back()->with('error', 'Tidak ada kamar yang tersedia.');
                        }
                    }),

                // Aksi untuk menolak pendaftar
                Action::make('tolak')
                    ->label('Tolak')
                    ->action(function (Formulir $record) {
                        // Hapus data calon pendaftar yang ditolak
                        Log::info('Pendaftar dengan NPM ' . $record->npm . ' ditolak.');
                        $record->delete();
                    }),
            ])
            ->bulkActions([
                // Jika perlu, Anda bisa menambahkan aksi massal (misalnya hapus banyak data sekaligus)
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
            'index' => Pages\ListCalonPendaftars::route('/'),
            'create' => Pages\CreateCalonPendaftar::route('/create'),
            'edit' => Pages\EditCalonPendaftar::route('/{record}/edit'),
        ];
    }
}
