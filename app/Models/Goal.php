<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Goal extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'is_visible',
    ];

    protected function casts(): array
    {
        return [
            'is_visible' => 'boolean',
        ];
    }

    protected static function booted(): void
    {
        static::saving(function (Goal $goal): void {
            if ($goal->name === null || (! $goal->isDirty('name') && $goal->slug !== null)) {
                return;
            }

            $goal->slug = static::generateUniqueSlug($goal->name, $goal->getKey());
        });
    }

    protected static function generateUniqueSlug(string $name, mixed $ignoreId = null): string
    {
        $baseSlug = Str::slug($name);
        $baseSlug = $baseSlug !== '' ? $baseSlug : 'goal';
        $slug = $baseSlug;
        $counter = 2;

        while (static::query()
            ->when($ignoreId !== null, fn ($query) => $query->whereKeyNot($ignoreId))
            ->where('slug', $slug)
            ->exists()) {
            $slug = "{$baseSlug}-{$counter}";
            $counter++;
        }

        return $slug;
    }
}
