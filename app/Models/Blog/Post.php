<?php

namespace App\Models\Blog;

use App\Models\Comment;
use Database\Factories\Blog\PostFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Post extends Model implements HasMedia
 {
    /** @use HasFactory<PostFactory> */
    use HasFactory, InteractsWithMedia;

    /**
    * @var string
    */
    protected $table = 'blog_posts';

    /**
    * @var array<string, string>
    */
    protected $casts = [
        'published_at' => 'date',
    ];

    /** @return BelongsTo<Author, $this> */

    public function author(): BelongsTo
 {
        return $this->belongsTo( Author::class, 'blog_author_id' );
    }

    /** @return BelongsTo<Category, $this> */

    public function category(): BelongsTo
 {
        return $this->belongsTo( Category::class, 'blog_category_id' );
    }

    public function similar_posts()
 {
        return $this->category
        ->posts() // Inverse relation—grabs all in same category
        ->where( 'id', '!=', $this->id ) // ✅ Exclude this post dynamically
        ->latest();
        // Order by newest first ( or ->orderBy( 'views_count', 'desc' ) for popular )
    }
    /** @return MorphMany<Comment, $this> */

    public function comments(): MorphMany
 {
        return $this->morphMany( Comment::class, 'commentable' );
    }

    public function comments_count()
 {
        return $this->comments()->count();
    }

    public function registerMediaCollections(): void
 {
        $this->addMediaCollection( 'post-images' )
        ->acceptsMimeTypes( [ 'image/jpeg', 'image/png', 'image/jpg', 'image/webp' ] );
    }

    public function getFirstImagePathAttribute(): string
 {
        $media = $this->getFirstMedia( 'post-images' );

        if ( $media ) {
            return 'storage/' . $media->id . '/' . $media->file_name;
        }

        // Fallback placeholder
        return 'static/assets/images/project_placeholder.jpg';

        // <img src = "{{ asset($product->first_image_path) }}" alt = 'Product'>

    }

    public function views() {
        return $this->hasOne( View::class, 'blog_post_id' );
    }

}
