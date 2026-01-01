<?php

namespace App\Filament\Resources\Blog\Posts\Schemas;

use App\Models\Blog\Post;
use Illuminate\Support\Str;
use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\SpatieTagsInput;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;

class PostForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make()
                    ->schema([
                        TextInput::make('title')
                            ->required()
                            ->live(onBlur: true)
                            ->maxLength(255)
                            ->afterStateUpdated(fn (string $operation, $state, Set $set) => $operation === 'create' ? $set('slug', Str::slug($state)) : null),

                        TextInput::make('slug')
                            ->disabled()
                            ->dehydrated()
                            ->required()
                            ->maxLength(255)
                            ->unique(Post::class, 'slug', ignoreRecord: true),

                        RichEditor::make('content')
                            ->required()
                            ->columnSpan('full'),

                        Select::make('blog_author_id')
                            ->relationship('author', 'name')
                            ->searchable()
                            ->preload()
                            ->required(),

                        Select::make('blog_category_id')
                            ->relationship('category', 'name')
                            ->searchable()
                            ->preload()
                            ->required(),

                        DatePicker::make('published_at')
                            ->label('Publishing date'),
                        // SpatieTagsInput::make('tags'),
                        Toggle::make('is_visible')
                            ->label('Visibility')
                            ->default(true),
                    ])
                    ->columns(2),

                Section::make('Image')
                    ->schema([
                        SpatieMediaLibraryFileUpload::make('image')
                            ->collection('post-images')
                            ->hiddenLabel()
                            ->acceptedFileTypes(['image/jpeg']),
                    ])
                    ->collapsible(),
            ]);
    }
}
