<?php

namespace App\Filament\Resources\Posyandus;

use App\Filament\Resources\Posyandus\Pages\CreatePosyandu;
use App\Filament\Resources\Posyandus\Pages\EditPosyandu;
use App\Filament\Resources\Posyandus\Pages\ListPosyandus;
use App\Filament\Resources\Posyandus\Schemas\PosyanduForm;
use App\Filament\Resources\Posyandus\Tables\PosyandusTable;
use App\Models\Posyandu;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class PosyanduResource extends Resource
{
    protected static ?string $model = Posyandu::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Posyandu';

    public static function form(Schema $schema): Schema
    {
        return PosyanduForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PosyandusTable::configure($table);
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
            'index' => ListPosyandus::route('/'),
            'create' => CreatePosyandu::route('/create'),
            'edit' => EditPosyandu::route('/{record}/edit'),
        ];
    }
}
