<?php

namespace App\Filament\Clusters\Setting\Resources\Pages;

use BackedEnum;
use App\Models\Page;
use Filament\Tables\Table;
use Filament\Schemas\Schema;
use Filament\Resources\Resource;
use Filament\Support\Icons\Heroicon;
use App\Filament\Clusters\Setting\SettingCluster;
use App\Filament\Clusters\Setting\Resources\Pages\Schemas\PageForm;
use App\Filament\Clusters\Setting\Resources\Pages\Pages\EditPage;
use App\Filament\Clusters\Setting\Resources\Pages\Pages\ViewPage;
use App\Filament\Clusters\Setting\Resources\Pages\Tables\PagesTable;
use App\Filament\Clusters\Setting\Resources\Pages\Pages\ListPages;
use App\Filament\Clusters\Setting\Resources\Pages\Pages\CreatePage;
use App\Filament\Clusters\Setting\Resources\Pages\Schemas\PageInfolist;

class PageResource extends Resource
{
    protected static ?string $model = Page::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedClipboardDocumentList;

    protected static ?string $cluster = SettingCluster::class;

    protected static ?string $recordTitleAttribute = 'title';

    protected static ?int $navigationSort = 1;

    public static function form(Schema $schema): Schema
    {
        return PageForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return PageInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PagesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListPages::route('/'),
            // 'create' => CreatePage::route('/create'),
            'view' => ViewPage::route('/{record}'),
            'edit' => EditPage::route('/{record}/edit'),
        ];
    }
}
