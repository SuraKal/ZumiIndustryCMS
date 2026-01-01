<?php

namespace App\Filament\Resources\Partners\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;

class PartnerForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                
                TextInput::make('website')
                    ->url()
                    ->default(null),
                Textarea::make('note')
                    ->default(null)
                    ->columnSpanFull(),
                FileUpload::make('logo')
                    ->image()
                    ->directory('partners/logos')
                    ->maxSize(2048)
                    ->nullable(),
            ]);
    }
}
