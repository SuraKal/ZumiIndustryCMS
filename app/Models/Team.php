<?php

namespace App\Models;

use Illuminate\Support\Str;
use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Team extends Model implements HasMedia
{
    /** @use HasFactory<\Database\Factories\TeamFactory> */
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
        $this->addMediaCollection('team-photo')
                ->acceptsMimeTypes(['image/jpeg', 'image/png', 'image/jpg', 'image/webp', 'image/svg']);
    }


    public function getFirstImagePathAttribute(): string
    {
        $media = $this->getFirstMedia('team-photo');

        if ($media) {
            return 'storage/' . $media->id . '/' . $media->file_name;
        }

        // Fallback placeholder
        return 'static/assets/img/user-avatar.jpg';
    }

    public function getImagePathsAttribute(): array
    {
        $mediaItems = $this->getMedia('team-photo');

        if ($mediaItems->isEmpty()) {
            // Return placeholder if no images at all
            return ['static/assets/img/user-avatar.jpg'];
        }
        return $mediaItems->map(fn ($media) => 'storage/' . $media->id . '/' . $media->file_name)->toArray();
        //   @foreach ($product->image_paths as $path)
        //     <img src="{{ asset($path) }}" alt="Product">
        // @endforeach
    }

}
