<?php

namespace App\Filament\Resources\Balitas\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class BalitaForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nama balita')
                    ->required(),
                TextInput::make('nama ibu')
                    ->required(),
                TextInput::make('nama ayah')
                    ->required(),
            ]);
    }
}
