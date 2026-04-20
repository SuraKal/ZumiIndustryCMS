<?php

use App\Models\Aim;
use App\Models\Goal;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

it('allows a goal to have many aims', function () {
    $goal = Goal::create([
        'name' => 'Expand Export Network',
    ]);

    $goal->aims()->createMany([
        ['content' => 'Open two new regional offices'],
        ['content' => 'Launch a distributor onboarding program'],
    ]);

    expect($goal->aims)->toHaveCount(2)
        ->and($goal->aims->pluck('content')->all())
        ->toBe([
            'Open two new regional offices',
            'Launch a distributor onboarding program',
        ]);
});

it('sets the aim goal reference to null when its goal is deleted', function () {
    $goal = Goal::create([
        'name' => 'Expand Export Network',
    ]);

    $aim = Aim::create([
        'content' => 'Open two new regional offices',
        'goal_id' => $goal->id,
    ]);

    $goal->delete();

    expect($aim->fresh()?->goal_id)->toBeNull();
});
