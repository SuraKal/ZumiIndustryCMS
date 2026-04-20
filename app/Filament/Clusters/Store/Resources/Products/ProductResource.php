<?php

namespace App\Filament\Clusters\Store\Resources\Products;

use App\Filament\Clusters\Store\Resources\Products\Pages\CreateProduct;
use App\Filament\Clusters\Store\Resources\Products\Pages\EditProduct;
use App\Filament\Clusters\Store\Resources\Products\Pages\ListProducts;
use App\Filament\Clusters\Store\Resources\Products\Schemas\ProductForm;
use App\Filament\Clusters\Store\Resources\Products\Tables\ProductsTable;
use App\Filament\Clusters\Store\StoreCluster;
use App\Models\Product;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $cluster = StoreCluster::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedCube;

    protected static ?string $recordTitleAttribute = 'name';

    public static function getRecordRouteKeyName(): string
    {
        return 'uuid';
    }

    public static function form(Schema $schema): Schema
    {
        return ProductForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ProductsTable::configure($table);
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
            'index' => ListProducts::route('/'),
            'create' => CreateProduct::route('/create'),
            'edit' => EditProduct::route('/{record}/edit'),
        ];
    }
}
