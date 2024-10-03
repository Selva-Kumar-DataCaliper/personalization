<?php

namespace App\Filament\Resources\RelationShipResource\Pages;

use App\Filament\Resources\RelationShipResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRelationShip extends EditRecord
{
    protected static string $resource = RelationShipResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
