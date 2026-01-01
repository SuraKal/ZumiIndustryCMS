<?php

namespace App\Filament\Clusters\Setting\Resources\Pages\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\RichEditor;

class PageForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Page Content')
                    ->schema([
                        RichEditor::make('content')
                            ->label('Content')
                            ->toolbarButtons([
                                'bold',
                                'italic',
                                'underline',
                                'strike',
                                'link',
                                'orderedList',
                                'blockquote',
                                'codeBlock',
                                'redo',
                                'undo',
                                'h2',
                                'h3'
                            ])
                            ->columnSpanFull()
                            ->required()
                            ->helperText('Edit the page content here. You can format text and add links.')
                            ->maxlength(300)
                            ,
                    ])
                    ->collapsible()
                    ->columnSpanFull(),
            ]);
    }
}
