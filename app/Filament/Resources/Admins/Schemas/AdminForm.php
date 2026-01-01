<?php

namespace App\Filament\Resources\Admins\Schemas;

use App\Models\User;
use App\Enums\UserStatus;
use Illuminate\Support\Str;
use Filament\Schemas\Schema;
use Illuminate\Support\Facades\Hash;
use Filament\Forms\Components\Select;
use Illuminate\Database\Eloquent\Model;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\ToggleButtons;
use Filament\Infolists\Components\TextEntry;

class AdminForm
{
    public static function configure(Schema $schema): Schema
    {
                return $schema
            ->components([
                Section::make()
                    ->schema([
                        TextInput::make('name')
                            ->maxLength(255)
                            ->required(),

                        TextInput::make('email')
                            ->label('Email address')
                            ->required()
                            ->email()
                            ->maxLength(255)
                            ->unique(ignoreRecord: true),

                        TextInput::make('phone')
                            ->maxLength(255),
TextInput::make('password')
                        ->label('Password')
                        ->type('text') // Makes the password visible
                        ->default(fn (string $operation): ?string => $operation === 'create' ? Str::password(12) : null) // Autogenerate 12-char password on create
                        ->required(fn (string $operation): bool => $operation === 'create')
                        ->minLength(8)
                        ->dehydrated(fn ($state) => filled($state)) // Only save if filled
                        ->dehydrateStateUsing(fn ($state) => Hash::make($state)) // Hash password
                        ->autocomplete('new-password')
                        ,
                        ToggleButtons::make('status')
                            ->inline()
                            ->options(UserStatus::class)
                            ->required(),
Select::make('roles')
    ->relationship('roles', 'name')
    ->multiple()
    ->preload()
    ->searchable(),
                    ])
                    ->columns(2)
                    ->columnSpan(['lg' => fn (?User $record) => $record === null ? 3 : 2]),

                Section::make()
                    ->schema([
                        TextEntry::make('created_at')
                            ->state(fn (User $record): ?string => $record->created_at?->diffForHumans()),

                        TextEntry::make('updated_at')
                            ->label('Last modified at')
                            ->state(fn (User $record): ?string => $record->updated_at?->diffForHumans()),
                    ])
                    ->columnSpan(['lg' => 1])
                    ->hidden(fn (?User $record) => $record === null),
            ])
            ->columns(3);
    }
}
