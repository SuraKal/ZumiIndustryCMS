<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Socialmedia;
// Your model – scalable for relations later
use Illuminate\Support\Str;
// For slug generation

class SocialmediaSeeder extends Seeder {
    /**
    * Run the database seeds.
    */

    public function run(): void {
        // Scalable data: Array of profiles – loop for multiples ( e.g., add 'AST Premium' later )
        $profiles = [
            [
                'name' => 'Amen Trading', // Your specified name
                'slug' => 'go-coffee', // Unique, SEO-friendly
                'facebook' => 'https://www.facebook.com/amentradingethiopia',
            ],
        ];

        foreach ( $profiles as $profile ) {
            // Auto-slug if missing: Str::slug( $profile[ 'name' ] )
            Socialmedia::updateOrCreate(
                [ 'slug' => $profile[ 'slug' ] ], // Unique key – prevents dupes
                $profile // Fill all fields
            );
        }
    }
}