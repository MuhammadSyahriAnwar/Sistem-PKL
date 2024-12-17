<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PesertaPklResource\Pages;
use App\Filament\Resources\PesertaPklResource\RelationManagers;
use App\Models\PesertaPkl;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PesertaPklResource extends Resource
{
    protected static ?string $model = PesertaPkl::class;


    public static function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama')->required(),
                Forms\Components\TextInput::make('nim')->required()->unique(),
                Forms\Components\TextInput::make('email')->email()->required(),
                Forms\Components\TextInput::make('no_hp')->required(),
                Forms\Components\Select::make('perusahaan_id')
                    ->relationship('perusahaan', 'nama_perusahaan')
                    ->required(),
                Forms\Components\Select::make('jadwal_pkl_id')
                    ->relationship('jadwalPkl', 'tanggal_mulai')
                    ->required(),
            ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama'),
                Tables\Columns\TextColumn::make('nim'),
                Tables\Columns\TextColumn::make('email'),
                Tables\Columns\TextColumn::make('perusahaan.nama_perusahaan'),
                Tables\Columns\TextColumn::make('jadwalPkl.tanggal_mulai'),
            ]);
    }
    public static function getPages(): array
{
    return [
        'index' => Pages\ListPesertaPkls::route('/'),
        'create' => Pages\CreatePesertaPkl::route('/create'),
        'edit' => Pages\EditPesertaPkl::route('/{record}/edit'),
    ];
}

}