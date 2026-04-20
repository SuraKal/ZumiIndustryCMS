<?php

namespace App\Filament\Clusters\Store\Resources\Categories\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class CategoryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Category Information')
                    ->columns(1)
                    ->schema([
                        TextInput::make('name')
                            ->required()
                            ->maxLength(255),
                        Textarea::make('description')
                            ->rows(5)
                            ->columnSpanFull(),
                        FileUpload::make('thumbnail')
                            ->image()
                            ->imageEditor()
                            ->directory('category-image')
                            ->maxSize(4096)
                            ->nullable(),
                    ]),
            ]);
    }
}
