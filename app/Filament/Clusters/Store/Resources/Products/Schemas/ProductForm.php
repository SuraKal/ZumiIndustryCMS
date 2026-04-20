<?php

namespace App\Filament\Clusters\Store\Resources\Products\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class ProductForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('General Information')
                    ->columns(1)
                    ->schema([
                        Select::make('category_id')
                            ->label('Category')
                            ->relationship('category', 'name')
                            ->searchable()
                            ->preload()
                            ->nullable()
                            ->helperText('Assign an optional category to organize the product.'),
                        TextInput::make('name')
                            ->label('Product Name')
                            ->required()
                            ->minLength(3)
                            ->helperText('Enter a descriptive name for the product.'),
                        TextInput::make('overview')
                            ->label('Overview')
                            ->nullable()
                            ->maxLength(100)
                            ->helperText('Short summary of the product (optional) Max(100 characters).'),
                    ]),
                Section::make('Description')
                    ->columns(1)
                    ->schema([
                        MarkdownEditor::make('description')
                            ->label('Detailed Description')
                            ->required()
                            ->minLength(3)
                            ->maxLength(1000)
                            ->columnSpanFull()
                            ->helperText('Provide detailed information about the product. Max 1000 characters.')
                            ->toolbarButtons([
                                'blockquote',
                                'bold',
                                'bulletList',
                                'codeBlock',
                                'heading',
                                'italic',
                                'link',
                                'orderedList',
                                'redo',
                                'strike',
                                'table',
                                'undo',
                            ]),
                    ]),
                Section::make('Visibility & Thumbnail')
                    ->columns(1)
                    ->schema([
                        Toggle::make('is_visible')
                            ->label('Visible to Users')
                            ->required()
                            ->helperText('Toggle whether this product should be visible on the website.'),
                        FileUpload::make('thumbnail')
                            ->label('Thumbnail Image')
                            ->nullable()
                            ->imageEditor()
                            ->directory('product-image')
                            ->maxSize(4096)
                            ->helperText('Upload a main image for the product (max 4MB).'),
                    ]),
                Section::make('Gallery Images')
                    ->collapsible()
                    ->collapsed(true)
                    ->schema([
                        SpatieMediaLibraryFileUpload::make('media')
                            ->collection('product-image')
                            ->multiple()
                            ->reorderable()
                            ->imageEditor()
                            ->hiddenLabel()
                            ->helperText('Upload multiple gallery images (max 5MB each).')
                            ->maxSize(4096),
                    ]),
            ]);
    }
}
