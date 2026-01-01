<?php

namespace App\Filament\Clusters\Setting\Resources\Socialmedia;

use BackedEnum;
use Filament\Tables\Table;
use App\Models\Socialmedia;
use Filament\Actions\Action;
use Filament\Schemas\Schema;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Resource;
use Filament\Actions\DeleteAction;
use Filament\Support\Icons\Heroicon;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Utilities\Get;
use App\Filament\Clusters\Setting\SettingCluster;
use Filament\Tables\Columns\IconColumn; // For potential icons in table
use App\Filament\Clusters\Setting\Resources\Socialmedia\Pages\ManageSocialmedia;
use Filament\Forms\Components\Actions as FormActions; // Add if needed for form actions

class SocialmediaResource extends Resource
{
    protected static ?string $model = Socialmedia::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedShare;

    protected static ?string $cluster = SettingCluster::class;

    
    protected static ?int $navigationSort = 2;

            public static function getModelLabel(): string
    {
        return 'Social Media';
    }

    public static function getPluralModelLabel(): string
    {
        return 'Social Media';
    }

    protected static ?string $navigationLabel = 'Social Media';

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Messaging & Short Video')
                    ->schema([
                        static::urlInput('whatsapp', 'WhatsApp URL', 'https://wa.me/your-number', 'heroicon-o-phone'),  // Chat/phone for messaging

                        static::urlInput('tiktok', 'TikTok URL', 'https://tiktok.com/@yourhandle', 'heroicon-o-sparkles'),  // Sparkles for viral videos
                    ])
                    ->columns(1),  // Responsive: Stacks on mobile

                Section::make('Social Networks')
                    ->schema([
                        static::urlInput('facebook', 'Facebook URL', 'https://facebook.com/yourpage', 'heroicon-o-users'),  // Group/users for community

                        static::urlInput('twitter', 'Twitter (X) URL', 'https://twitter.com/yourhandle', 'heroicon-o-at-symbol'),  // @ for tweets/mentions

                        static::urlInput('linkedin', 'LinkedIn URL', 'https://linkedin.com/company/yoursite', 'heroicon-o-briefcase'),  // Briefcase for professional net

                        static::urlInput('instagram', 'Instagram URL', 'https://instagram.com/yourhandle', 'heroicon-o-camera'),  // Camera for photos/stories
                    ])
                    ->columns(1),

                Section::make('Video & Content Platforms')
                    ->schema([
                        static::urlInput('youtube', 'YouTube URL', 'https://youtube.com/@yourchannel', 'heroicon-o-play-circle'),  // Play for video playback

                        static::urlInput('pinterest', 'Pinterest URL', 'https://pinterest.com/yourboard', 'heroicon-o-photo'),  // Photo for pins/boards

                        static::urlInput('vimeo', 'Vimeo URL', 'https://vimeo.com/yourchannel', 'heroicon-o-film'),  // Film reel for pro videos

                        static::urlInput('flickr', 'Flickr URL', 'https://flickr.com/yourprofile', 'heroicon-o-camera'),  // Camera for photo vibes (optional: remove last arg for no icon)
                    ])
                    ->columns(1),

                Section::make('Shopping & Other')
                    ->schema([
                        static::urlInput('amazon', 'Amazon Store URL', 'https://amazon.com/yourstore', 'heroicon-o-shopping-bag'),  // Bag for e-commerce

                        static::urlInput('snapchat', 'Snapchat URL', 'https://snapchat.com/add/yourhandle', 'heroicon-o-camera'),  // Camera for snaps (reuse for simplicity)

                        static::urlInput('googleplus', 'Google+ URL', 'https://plus.google.com/yourpage', 'heroicon-o-globe-alt'),  // Globe for broad reach (keeping for migration, though deprecated)
                    ])
                    ->columns(1),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('name')
            ->columns([
                TextColumn::make('name')
                    ->searchable()
                    ->sortable(),
            ])
            ->filters([
            ])
            ->recordActions([
                EditAction::make(),
            ]);
    }

    // Your reusable urlInput helper (already perfect—keeps it DRY!)
    protected static function urlInput(
        string $name,
        string $label,
        string $placeholder,
        ?string $icon = null  // Optional icon—pass null for none
    ): TextInput {
        return TextInput::make($name)
            ->label($label)
            ->url()
            ->placeholder($placeholder)
            ->prefixIcon($icon)  // Only if provided
            ->live()  // Reacts to typing for the suffix icon
            ->suffixAction(
                fn (Get $get) => ($url = $get($name)) ?  // If not empty...
                    Action::make("open-{$name}")  // Unique name per field (e.g., "open-whatsapp")—fixes the error!
                        ->url($url)
                        ->openUrlInNewTab()
                        ->icon('heroicon-o-arrow-top-right-on-square')
                        ->color('gray')  // Subtle—swap to 'primary' if you want pop!
                    : null  // Hide if empty
            )
            ->columnSpan(1);  // Keeps your layout
    }

    public static function getPages(): array
    {
        return [
            'index' => ManageSocialmedia::route('/'),
        ];
    }
}