<?php

namespace App\Filament\Resources\Galleries\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Tables\Columns\Layout\View;
use Filament\Infolists\Components\TextEntry;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;

class GalleryInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Gallery Details')
                    ->collapsible()
                    ->schema([
                        Section::make([
                            TextEntry::make('title')->placeholder('-'),
                            TextEntry::make('slug')->placeholder('-'),
                        ])->columns(3),

                        TextEntry::make('description')
                            ->placeholder('-')
                            ->columnSpanFull(),

                        Section::make([
                            TextEntry::make('created_at')
                                ->label('Created')
                                ->dateTime()
                                ->placeholder('-'),
                            TextEntry::make('updated_at')
                                ->label('Updated')
                                ->dateTime()
                                ->placeholder('-'),
                        ])->columns(2),
                    ]),

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
                            ]),
                    ]),
            ]);
    }
}
