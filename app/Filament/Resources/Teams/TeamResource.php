<?php

namespace App\Filament\Resources\Teams;

use BackedEnum;
use App\Models\Team;
use Filament\Tables\Table;
use Filament\Schemas\Schema;
use Filament\Actions\EditAction;
use Filament\Resources\Resource;
use Filament\Actions\DeleteAction;
use Filament\Support\Icons\Heroicon;
use Filament\Actions\BulkActionGroup;
use Filament\Forms\Components\Toggle;
use Filament\Actions\DeleteBulkAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ToggleColumn;
use App\Filament\Resources\Teams\Pages\ManageTeams;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;

class TeamResource extends Resource
{
    protected static ?string $model = Team::class;

    
    protected static string|BackedEnum|null $navigationIcon = Heroicon::UserGroup;

    protected static bool $shouldRegisterNavigation = false;

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('role')
                    ->default(null),
                Toggle::make('is_visible')
                    ->label('Appear on Website')
                    ->required(),
                SpatieMediaLibraryFileUpload::make('media')
                    ->collection('team-photo')
                    ->acceptedFileTypes(['image/jpeg','image/png','image/jpg','image/webp','image/svg'])
                    ->label('Team Image'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->searchable(),
                TextColumn::make('role')
                    ->searchable(),
                ToggleColumn::make('is_visible')
                    ->label('Appear on Website')
                    ->default(true) // Sets default for new records
                    ->sortable() // Bonus: Sort table by this toggle state
                    ->toggleable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->reorderable('order')
            ->defaultSort('order', 'asc')
            ->recordActions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => ManageTeams::route('/'),
        ];
    }
}
