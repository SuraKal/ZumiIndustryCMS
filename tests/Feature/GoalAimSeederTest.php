<?php

use App\Models\Goal;
use Database\Seeders\GoalAimSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

it('seeds goals with their related aims', function () {
    $this->seed(GoalAimSeeder::class);

    $shortTermGoal = Goal::query()
        ->where('name', 'Short-Term (1-3 Years)')
        ->first();

    $longTermGoal = Goal::query()
        ->where('name', 'Long-Term (3-10 Years)')
        ->first();

    expect($shortTermGoal)->not->toBeNull()
        ->and($shortTermGoal?->slug)->toBe('short-term-1-3-years')
        ->and($shortTermGoal?->aims()->count())->toBe(6)
        ->and($longTermGoal)->not->toBeNull()
        ->and($longTermGoal?->slug)->toBe('long-term-3-10-years')
        ->and($longTermGoal?->aims()->count())->toBe(7);
});
