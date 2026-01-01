<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'title' => 'My Gallery',
                'slug' => 'my-gallery',
                'description' => 'A collection of images to be used on the main gallery section of site.'
            ]
        ];
        foreach ($data as $item) {
            \App\Models\Gallery::create($item);
        }
    }
}
