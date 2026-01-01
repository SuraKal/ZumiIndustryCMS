<?php

namespace Database\Seeders;

use Closure;
use App\Models\Comment;
use App\Models\Blog\Post;
use App\Models\Blog\Author;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Collection;
use App\Models\Blog\Category as BlogCategory;
use Symfony\Component\Console\Helper\ProgressBar;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Blog
        $this->command->warn(PHP_EOL . 'Creating blog categories...');
        $blogCategories = $this->withProgressBar(20, fn () => BlogCategory::factory(1)
            ->count(20)
            ->create());
        $this->command->info('Blog categories created.');

        $this->command->warn(PHP_EOL . 'Creating blog authors and posts...');
        $this->withProgressBar(20, fn () => Author::factory(1)
            ->has(
                Post::factory()->count(5)
                    // ->has(
                    //     Comment::factory()->count(rand(5, 10))
                    //         ->state(fn (array $attributes, Post $post) => ['customer_id' => $customers->random(1)->first()->id]),
                    // )
                    ->state(fn (array $attributes, Author $author) => [
                        'blog_category_id' => $blogCategories->random(1)->first()->id,
                        'is_visible' => true
                    ]),
                'posts'
            )
            ->create());
        $this->command->info('Blog authors and posts created.');
    }

        protected function withProgressBar(int $amount, Closure $createCollectionOfOne): Collection
    {
        $progressBar = new ProgressBar($this->command->getOutput(), $amount);

        $progressBar->start();

        $items = new Collection;

        foreach (range(1, $amount) as $i) {
            $items = $items->merge(
                $createCollectionOfOne()
            );
            $progressBar->advance();
        }

        $progressBar->finish();

        $this->command->getOutput()->writeln('');

        return $items;
    }
}
