<?php

namespace App\Filament\Resources\RelationShipResource\Pages;

use App\Filament\Resources\RelationShipResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRelationShips extends ListRecords
{
    protected static string $resource = RelationShipResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
