<?php

namespace App\Filament\Resources\Faqs;

use BackedEnum;
use App\Models\Faq;
use Filament\Tables\Table;
use Filament\Schemas\Schema;
use Filament\Actions\EditAction;
use Filament\Resources\Resource;
use Filament\Actions\DeleteAction;
use Filament\Support\Icons\Heroicon;
use Filament\Actions\BulkActionGroup;
use Filament\Forms\Components\Toggle;
use Filament\Actions\DeleteBulkAction;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ToggleColumn;
use App\Filament\Resources\Faqs\Pages\ManageFaqs;

class FaqResource extends Resource
{
    protected static ?string $model = Faq::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::QuestionMarkCircle;

    protected static ?string $recordTitleAttribute = 'title';

        public static function getModelLabel(): string
    {
        return 'Frequently Asked Question';
    }

    public static function getPluralModelLabel(): string
    {
        return 'Frequently Asked Question';

    }
    protected static ?string $navigationLabel = 'Faqs';

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->minLength(3)
                    ->maxLength(255)
                    ->required(),
                Textarea::make('message')
                    ->required()
                    ->minLength(3)
                    ->maxLength(1000)
                    ->columnSpanFull(),
                Toggle::make('is_visible')
                    ->required()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('title')
            ->columns([
                TextColumn::make('title')
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
            ->defaultSort('order', 'asc')
            ->reorderable('order') 
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
            'index' => ManageFaqs::route('/'),
        ];
    }
}
