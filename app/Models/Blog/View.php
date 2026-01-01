<?php

namespace App\Models\Blog;

use Illuminate\Database\Eloquent\Model;

class View extends Model
{
        /**
     * @var string
     */
    protected $table = 'blog_views';

    /**
     * @var array<string, string>
     */
    protected $casts = [
        'view' => 'int',
    ];
}
