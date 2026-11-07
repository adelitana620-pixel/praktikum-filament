<?php

namespace App\Filament\Resources\Posyandus\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class PosyanduForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nama')
                    ->required(),
                TextInput::make('alamat')
                    ->required(),
                TextInput::make('telepon')->tel(),
                TextInput::make('latitude')
                    ->required()->numeric()
                    ->minValue(-90)->maxValue(90)
                    ->helperText('Contoh: -6.1754'),
                TextInput::make('longitude')
                    ->required()->numeric()
                    ->minValue(-180)->maxValue(180)
                    ->helperText('Contoh: 106.8272'),
            ]);
    }
}
