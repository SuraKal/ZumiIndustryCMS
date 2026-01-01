<?php

namespace App\Filament\Resources\Blog\Posts\Pages;

use BackedEnum;
use Filament\Tables\Table;
use Filament\Schemas\Schema;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Actions\CreateAction;
use Filament\Actions\DeleteAction;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Actions\DeleteBulkAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Resources\Pages\ManageRelatedRecords;
use App\Filament\Resources\Blog\Posts\PostResource;

class ManagePostComments extends ManageRelatedRecords
{
    protected static string $resource = PostResource::class;

    protected static string $relationship = 'comments';

    protected static string | BackedEnum | null $navigationIcon = 'heroicon-o-chat-bubble-left-ellipsis';

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required(),

                Toggle::make('is_visible')
                    ->label('Public visibility')
                    ->default(true),

                RichEditor::make('content')
                    ->required(),
            ])
            ->columns(1);
    }

    public function infolist(Schema $schema): Schema
    {
        return $schema
            ->columns(1)
            ->components([
                TextEntry::make('title'),
                IconEntry::make('is_visible')
                    ->label('Public visibility'),
                TextEntry::make('content')
                    ->markdown(),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('title')
            ->columns([
                TextColumn::make('title')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('rating')
                ->suffix('/5')
                    ->searchable()
                    ->sortable(),
                ToggleColumn::make('is_visible')
                    ->label('Appear on Website')
                    ->default(true) // Sets default for new records
                    ->sortable() // Bonus: Sort table by this toggle state
                    ->toggleable()
            ])
            ->filters([
                //
            ])
            ->defaultSort('created_at', 'desc')
            ->headerActions([
                CreateAction::make(),
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->groupedBulkActions([
                DeleteBulkAction::make(),
            ]);
    }
}
