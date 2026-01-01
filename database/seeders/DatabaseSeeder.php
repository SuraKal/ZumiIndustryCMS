<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\TestimonialSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $positions = [
            'admin',
            'super_admin',
            'customer',
        ];

        foreach ($positions as $positionName) {

            $user = User::factory()->create([
                'name' => ucfirst(str_replace('_', ' ', $positionName)),
                'email' => $positionName . '@mail.com',
                'password' => $positionName . '@mail.com', // Default password
            ]);

            $position = \App\Models\Position::firstOrCreate(['name' => $positionName]);

            if($user && $position){
                $user?->positions()->attach($position->id);
            }
        }
        
        $this->call([
            PageSeeder::class,
            SocialmediaSeeder::class,
            SettingSeeder::class,
            TeamSeeder::class,
            TestimonialSeeder::class,
            GallerySeeder::class,
            ProjectSeeder::class,
            FaqSeeder::class,
            ProductPartnerSeeder::class
            // ShieldSeeder::class
        ]);
    }
}
