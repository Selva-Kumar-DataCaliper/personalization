<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RelationShipResource\Pages;
use App\Filament\Resources\RelationShipResource\RelationManagers;
use App\Models\RelationShip;
use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class RelationShipResource extends Resource
{
    protected static ?string $model = RelationShip::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static bool $shouldSkipAuthorization = true; // skip Authorization

    // protected static ?string $recordTitleAttribute = 'name-test';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Fillable Fileds')
                    ->collapsed(false)
                    ->description('This relationship for contact detail.')
                    ->schema([
                        TextInput::make('name')->label('Relationship Name')->placeholder('Text the relationship name')->required()->unique(ignoreRecord: true),
                        Select::make('status')->label('Status')->options(config('constants.status_label'))->required(),
                    ])
                    ->columns(2),
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->label('Name'),
                TextColumn::make('status')->label('Relation Status')
                    ->formatStateUsing(function ($state) {
                        return  config('constants.status_label')[$state];
                    }),
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                EditAction::make(),
                DeleteAction::make(),

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
            'index' => Pages\ListRelationShips::route('/'),
            'create' => Pages\CreateRelationShip::route('/create'),
            'edit' => Pages\EditRelationShip::route('/{record}/edit'),
        ];
    }
}
