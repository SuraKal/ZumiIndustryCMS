<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Partner extends Model
{
    /** @use HasFactory<\Database\Factories\PartnerFactory> */
    use HasFactory;
    protected static function boot()
    {
        parent::boot();

        // Automatically generate UUID when creating a new category
        static::creating(function ($model) {
            $model->uuid = $model->uuid ?? Str::uuid()->toString();
            $model->slug = $model->slug ?? Str::slug($model->name);
        });

    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
