<?php

namespace App\Observers;

use App\Models\Position;
use Illuminate\Support\Str;

class PositionObserver
{

    
    public function creating(Position $position)
    {
        $position->uuid = $position->uuid ?? Str::uuid()->toString();
    }

    
    /**
     * Handle the Position "created" event.
     */
    public function created(Position $position): void
    {
        //
    }

    /**
     * Handle the Position "updated" event.
     */
    public function updated(Position $position): void
    {
        //
    }

    /**
     * Handle the Position "deleted" event.
     */
    public function deleted(Position $position): void
    {
        //
    }

    /**
     * Handle the Position "restored" event.
     */
    public function restored(Position $position): void
    {
        //
    }

    /**
     * Handle the Position "force deleted" event.
     */
    public function forceDeleted(Position $position): void
    {
        //
    }
}
