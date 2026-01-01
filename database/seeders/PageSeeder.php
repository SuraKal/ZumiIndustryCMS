<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder {
    /**
    * Run the database seeds.
    */

    public function run(): void {
        $pages = [
            [
                'title' => 'Mission',
                'slug' => 'mission',
                'content' => <<<'HTML'
                <p>To build lasting, mutually beneficial relationships with clients by consistently exceeding expectations and delivering high-quality engineering services supported by skilled professionals and modern technology.</p>
                HTML,
                'is_visible' => true,
            ],
            [
                'title' => 'Vision',
                'slug' => 'vision',
                'content' => <<<'HTML'
                <p>To become one of Ethiopia's most trusted and respected engineering service providers known for delivering professional, safe, and innovative solutions.</p>
                HTML,
                'is_visible' => true,
            ],
        ];

        foreach ( $pages as $pageData ) {
            Page::firstOrCreate(
                [ 'slug' => $pageData[ 'slug' ] ],
                $pageData
            );
        }
    }
}