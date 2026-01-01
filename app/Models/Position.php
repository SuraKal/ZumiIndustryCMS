<?php

namespace App\Models;

use Illuminate\Support\Str;
use App\Observers\PositionObserver;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;

#[ObservedBy([PositionObserver::class])]
class Position extends Model
{
    /** @use HasFactory<\Database\Factories\PositionFactory> */
    use HasFactory;

    public function users(){
        return $this->belongsToMany(User::class, 'position_user');
    }
}
