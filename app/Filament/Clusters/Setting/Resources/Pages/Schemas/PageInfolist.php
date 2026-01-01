<?php

namespace App\Filament\Clusters\Setting\Resources\Pages\Schemas;

use Filament\Schemas\Schema;
use Filament\Schemas\Components\Html;
use Filament\Schemas\Components\Section;
use Filament\Infolists\Components\TextEntry;

class PageInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Page Content')
                    ->schema([
                        TextEntry::make('content')
                            ->markdown()
                    ])
                    ->columnSpanFull(),
            ]);
    }
}
