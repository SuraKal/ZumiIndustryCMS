<?php

namespace Database\Factories\Blog;

use App\Models\Blog\Post;
use Database\Seeders\LocalImages;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<Post>
 */
class PostFactory extends Factory
{
    /**
     * @var string
     */
    protected $model = Post::class;

    public function definition(): array
    {
        return [
            'title' => $title = $this->faker->unique()->sentence(4),
            'slug' => Str::slug($title),
            'content' => $this->faker->realText(),
            'published_at' => $this->faker->dateTimeBetween('-6 month', '+1 month'),
        ];
    }

    // public function configure(): PostFactory
    // {
    //     return $this->afterCreating(function (Post $product): void {
    //         $product
    //             ->addMedia(LocalImages::getRandomFile(LocalImages::SIZE_200x200))
    //             ->preservingOriginal()
    //             ->toMediaCollection('post-images');
    //     });
    // }
}
