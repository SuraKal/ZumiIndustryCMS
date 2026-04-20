<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Product extends Model implements HasMedia
{
    /** @use HasFactory<\Database\Factories\ProductFactory> */
    use HasFactory, InteractsWithMedia;

    protected $fillable = [
        'partner_id',
        'category_id',
        'code',
        'name',
        'overview',
        'description',
        'is_visible',
        'thumbnail',
        'uuid',
        'slug',
    ];

    protected function casts(): array
    {
        return [
            'is_visible' => 'boolean',
        ];
    }

    protected static function booted(): void
    {
        static::creating(function (Product $product): void {
            $product->uuid = $product->uuid ?? (string) Str::uuid();
            $product->code = $product->code ?? static::generateUniqueCode();
        });

        static::saving(function (Product $product): void {
            if (blank($product->name) || (! $product->isDirty('name') && filled($product->slug))) {
                return;
            }

            $product->slug = static::generateUniqueSlug($product->name, $product->getKey());
        });
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('product-image')
            ->acceptsMimeTypes(['image/jpeg', 'image/png', 'image/jpg', 'image/webp', 'image/svg']);
    }

    public function partner(): BelongsTo
    {
        return $this->belongsTo(Partner::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function getFirstImage(): string
    {
        return $this->thumbnail ? 'storage/'.$this->thumbnail : 'static/assets/images/project_placeholder.jpg';
    }

    public function getRouteKeyName(): string
    {
        return 'uuid';
    }

    protected static function generateUniqueCode(): string
    {
        do {
            $code = 'PRD-'.Str::upper(Str::random(8));
        } while (static::query()->where('code', $code)->exists());

        return $code;
    }

    protected static function generateUniqueSlug(string $name, mixed $ignoreId = null): string
    {
        $baseSlug = Str::slug($name);
        $baseSlug = $baseSlug !== '' ? $baseSlug : 'product';
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
