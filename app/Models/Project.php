<?php

namespace App\Models;

use Illuminate\Support\Str;
use Spatie\MediaLibrary\HasMedia;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Project extends Model implements HasMedia
{
    /** @use HasFactory<\Database\Factories\ProjectFactory> */
    use HasFactory,InteractsWithMedia;

        protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->uuid = $model->uuid ?? Str::uuid()->toString();

            if (empty($model->code)) {
                // Use DB::transaction only if not already in one
                $model->code = DB::transaction(function () use ($model) {
                    $prefix = 'Proj-';
                    do {
                        $firstDigits = str_pad(random_int(0, 999), 3, '0', STR_PAD_LEFT);
                        $secondDigits = str_pad(random_int(0, 999), 3, '0', STR_PAD_LEFT);
                        $code = "{$prefix}{$firstDigits}-{$secondDigits}";
                    } while ($model->newQuery()->where('code', $code)->exists());

                    return $code;
                });
            }
        });
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('project-image')
                ->acceptsMimeTypes(['image/jpeg', 'image/png', 'image/jpg', 'image/webp', 'image/svg'])
                ;
    }


    public function getFirstImagePathAttribute(): ?string
    {
        $media = $this->getFirstMedia('project-image');

        if ($media) {
            return 'storage/' . $media->id . '/' . $media->file_name;
        }

        return 'static/assets/images/project_placeholder.jpg';
    }

    public function getImagePathsAttribute(): array
    {
        $mediaItems = $this->getMedia('project-image');


        if ($mediaItems->isEmpty()) {
            // Return placeholder if no images at all
            return ['static/assets/images/project_placeholder.jpg'];
        }
        return $mediaItems->map(fn ($media) => 'storage/' . $media->id . '/' . $media->file_name)->toArray();
    }
    public function getImageCheckPathsAttribute(): array
    {
        $mediaItems = $this->getMedia('project-image');


        if ($mediaItems->isEmpty()) {
            // Return placeholder if no images at all
            return [];
        }
        return $mediaItems->map(fn ($media) => 'storage/' . $media->id . '/' . $media->file_name)->toArray();
    }


    public function getRouteKeyName()
    {
        return 'uuid';
    }

}
