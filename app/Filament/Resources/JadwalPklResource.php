<?php

namespace App\Filament\Resources;

use App\Filament\Resources\JadwalPklResource\Pages;
use App\Filament\Resources\JadwalPklResource\RelationManagers;
use App\Models\JadwalPkl;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class JadwalPklResource extends Resource
{
    protected static ?string $model = JadwalPkl::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Forms\Form $form): Forms\Form
{
    return $form
        ->schema([
            Forms\Components\DatePicker::make('tanggal_mulai')
                ->required()
                ->label('Tanggal Mulai'),
            // Tambahkan field lain sesuai kebutuhan
        ]);
}


    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
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
            'index' => Pages\ListJadwalPkls::route('/'),
            'create' => Pages\CreateJadwalPkl::route('/create'),
            'edit' => Pages\EditJadwalPkl::route('/{record}/edit'),
        ];
    }
}
