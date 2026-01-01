<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Page extends Model
{
    /** @use HasFactory<\Database\Factories\PageFactory> */
    use HasFactory;

    protected static function boot()
    {
        parent::boot();

        // Automatically generate UUID when creating a new category
        static::creating(function ($model) {
            // Generate Slug
            if (empty($model->slug)) {
                $baseSlug = Str::slug($model->name);
                $model->slug = $baseSlug;
            }
        });
    }


    protected $casts = [
        'is_visible' => 'boolean',
    ];
}
