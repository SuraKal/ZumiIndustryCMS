<?php

namespace App\Filament\Resources\Offerings\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\MarkdownEditor;

class OfferingForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextArea::make('description')
                    ->default(null)
                    ->maxLength(135)
                    ->helperText('Brief description (max 135 characters).')
                    ->columnSpanFull(),
                FileUpload::make('thumbnail')
                    ->image()
                    ->directory('offerings/thumbnails')
                    ->maxSize(2048)
                    ->nullable(),
                Toggle::make('is_visible')
                    ->required(),
            ]);
    }
}
