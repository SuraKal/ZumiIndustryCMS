<?php

namespace App\Filament\Resources\Galleries\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;

class GalleryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->disabled()
                    ->default('my-gallery'),
                TextInput::make('slug')
                    ->label('Handle')
                    ->disabled()
                    ->default(null),
                Textarea::make('description')
                    ->disabled()
                    ->default(null)
                    ->columnSpanFull(),

                Section::make('Gallery Images')
                    ->collapsible()
                    ->collapsed(false)
                    ->schema([
                        SpatieMediaLibraryFileUpload::make('media')
                            ->collection('gallery-image')
                            ->multiple()
                            ->reorderable()
                            ->imageEditor()
                            ->hiddenLabel()
                            ->helperText('Upload multiple gallery images (max 5MB each).')
                            ->maxSize(4096)
                            ->customProperties([
                                TextInput::make('caption')
                                    ->label('Caption')
                                    ->placeholder('Add a caption for this image'),
                            ])
                            ,
                    ]),
            ]);
    }
}
