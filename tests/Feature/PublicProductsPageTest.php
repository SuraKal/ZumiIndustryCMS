<?php

use App\Models\Category;
use App\Models\Product;

it('renders dynamic category filters that match product category attributes', function () {
    $deodorant = Category::create([
        'name' => 'Deodorant Spray',
    ]);

    $bodySplash = Category::create([
        'name' => 'Body Splash',
    ]);

    $hiddenCategory = Category::create([
        'name' => 'Battery',
    ]);

    Product::factory()->create([
        'category_id' => $deodorant->id,
        'name' => 'Fresh Guard',
        'is_visible' => true,
    ]);

    Product::factory()->create([
        'category_id' => $bodySplash->id,
        'name' => 'Ocean Mist',
        'is_visible' => true,
    ]);

    Product::factory()->create([
        'category_id' => $hiddenCategory->id,
        'name' => 'Hidden Battery',
        'is_visible' => false,
    ]);

    $response = $this->get(route('public.products'));

    $response->assertSuccessful()
        ->assertSee('All Products')
        ->assertSee('Deodorant Spray')
        ->assertSee('Body Splash')
        ->assertSee('Fresh Guard')
        ->assertSee('Ocean Mist')
        ->assertDontSee('Hidden Battery')
        ->assertSee('data-filter="deodorant-spray"', false)
        ->assertSee('data-filter="body-splash"', false)
        ->assertDontSee('data-filter="battery"', false)
        ->assertSee('data-category="deodorant-spray"', false)
        ->assertSee('data-category="body-splash"', false)
        ->assertDontSee('data-category="battery"', false);
});
