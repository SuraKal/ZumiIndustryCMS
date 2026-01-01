<?php

namespace App\Filament\Resources\Testimonials;

use BackedEnum;
use Filament\Tables\Table;
use App\Models\Testimonial;
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
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\RichEditor\RichEditorTool;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use App\Filament\Resources\Testimonials\Pages\ManageTestimonials;

class TestimonialResource extends Resource
{
    protected static ?string $model = Testimonial::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::Heart;

    protected static bool $shouldRegisterNavigation = false;

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('author_name')
                    ->required(),
                TextInput::make('author_position')
                    ->default(null),
                MarkdownEditor::make('content')
                    ->required()
                    ->columnSpanFull()
                    ->maxLength(300)
                    ,
                SpatieMediaLibraryFileUpload::make('media')
                    ->collection('tesimonial-avatar')
                    ->acceptedFileTypes(['image/jpeg','image/png','image/jpg','image/webp','image/svg'])
                    ->label('Avatar Image'),
                Toggle::make('is_visible')
                    ->label('Appear on Website')
                    ->required()
                    
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('author_name')
                    ->searchable(),
                TextColumn::make('author_position')
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
            'index' => ManageTestimonials::route('/'),
        ];
    }
}
