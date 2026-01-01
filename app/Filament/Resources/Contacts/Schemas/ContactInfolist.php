<?php

namespace App\Filament\Resources\Contacts\Schemas;

use Filament\Schemas\Schema;
use Filament\Schemas\Components\Section;
use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\TextEntry;

class ContactInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('General Information')
                    ->columns(2)
                    ->schema([
                        TextEntry::make('name')
                            ->label('Full Name')
                            ->placeholder('-')
                            ->columnSpan(1)
                            ->helperText('The name of the user who submitted the message.'),
                        TextEntry::make('email')
                            ->label('Email Address')
                            ->placeholder('-')
                            ->columnSpan(1)
                            ->helperText('The email of the user.'),
                        TextEntry::make('subject')
                            ->label('Subject')
                            ->placeholder('-')
                            ->columnSpanFull()
                            ->helperText('The subject of the message.'),
                        IconEntry::make('is_read')
                            ->label('Read?')
                            ->boolean()
                            ->trueIcon('heroicon-o-check-circle')
                            ->falseIcon('heroicon-o-x-circle')
                            ->trueColor('success')
                            ->falseColor('danger')
                            ->helperText('Indicates if the admin has read this message.')
                            ->columnSpan(1),
                    ]),

                Section::make('Message')
                    ->collapsible()        // Makes it collapsible
                    ->collapsed(false)     // Set true if you want it collapsed by default
                    ->columns(1)
                    ->schema([
                        TextEntry::make('message')
                            ->label('Message Content')
                            ->wrap()
                            ->helperText('The message submitted by the user.')
                            ->columnSpanFull(),
                    ]),

                Section::make('Timestamps')
                    ->columns(2)
                    ->schema([
                        TextEntry::make('created_at')
                            ->label('Commented At')
                            ->dateTime()
                            ->columnSpan(1)
                            ->helperText('When the message was submitted.')
                    ]),
            ]);
    }
}
