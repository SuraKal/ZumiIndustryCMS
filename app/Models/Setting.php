<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Setting extends Model
{
    use HasFactory;

    protected $casts = [
        'value' => 'array',  // Auto-decodes JSON – type-safe!
    ];

    // Accessor for typed value
    protected function value(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $this->type === 'image' ? $value : $value,
            set: fn ($value) => $value,
        );
    }

    // Scope for easy fetch
    public function scopeByKey($query, string $key)
    {
        return $query->where('key', $key)->first();
    }
}