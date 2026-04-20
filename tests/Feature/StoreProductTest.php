<?php

use App\Models\Category;
use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

it('generates a unique slug for categories from the name', function () {
    Category::create([
        'name' => 'Voltage Stabilizers',
    ]);

    $category = Category::create([
        'name' => 'Voltage Stabilizers',
    ]);

    expect($category->slug)->toBe('voltage-stabilizers-2');
});

it('generates code uuid and slug for products and associates them with a category', function () {
    $category = Category::create([
        'name' => 'Voltage Stabilizers',
    ]);

    $product = Product::create([
        'category_id' => $category->id,
        'name' => 'Automatic Voltage Stabilizer',
        'overview' => 'Reliable power control',
        'description' => 'Protects equipment from voltage fluctuation.',
    ]);

    expect($product->code)->toStartWith('PRD-')
        ->and($product->uuid)->not->toBeNull()
        ->and($product->slug)->toBe('automatic-voltage-stabilizer')
        ->and($product->category?->is($category))->toBeTrue();
});
