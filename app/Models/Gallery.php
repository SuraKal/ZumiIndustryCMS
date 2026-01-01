<?php

namespace App\Models;

use Illuminate\Support\Str;
use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Gallery extends Model implements HasMedia
{
    /** @use HasFactory<\Database\Factories\GalleryFactory> */
    use HasFactory,InteractsWithMedia;

    protected static function boot()
    {
        parent::boot();

        // Automatically generate UUID when creating a new category
        static::creating(function ($model) {
            $model->uuid = $model->uuid ?? Str::uuid()->toString();
        });
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('gallery-image')
                ->acceptsMimeTypes(['image/jpeg', 'image/png', 'image/jpg', 'image/webp', 'image/svg']);
    }


    public function getFirstImagePathAttribute(): ?string
    {
        $media = $this->getFirstMedia('gallery-image');

        if ($media) {
            return 'storage/' . $media->id . '/' . $media->file_name;
        }

        // Fallback placeholder
        return null;

        // <img src="{{ asset($product->first_image_path) }}" alt="Product">

    }

    public function getImagePathsAttribute(): ?array
    {
        $mediaItems = $this->getMedia('gallery-image');

        if ($mediaItems->isEmpty()) {
            // Return placeholder if no images at all
            return null;
        }

        return $mediaItems->map(fn ($media) => 'storage/' . $media->id . '/' . $media->file_name)->toArray();
    //   @foreach ($product->image_paths as $path)
    //     <img src="{{ asset($path) }}" alt="Product">
    // @endforeach
    }
}
