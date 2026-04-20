<?php

use App\Models\Goal;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

it('generates a slug from the goal name', function () {
    $goal = Goal::create([
        'name' => 'Expand Export Network',
    ]);

    expect($goal->slug)->toBe('expand-export-network');
});

it('keeps generated slugs unique', function () {
    Goal::create([
        'name' => 'Expand Export Network',
    ]);

    $goal = Goal::create([
        'name' => 'Expand Export Network',
    ]);

    expect($goal->slug)->toBe('expand-export-network-2');
});
