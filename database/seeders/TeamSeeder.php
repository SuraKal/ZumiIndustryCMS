<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $defaults = [
            ['name' => 'Mr Amen', 'role' => 'CEO/Founder', 'order' => 1, 'is_visible' => true],
        ];
        foreach ($defaults as $member) {
            Team::updateOrCreate(
                ['name' => $member['name']], // Unique key – prevents dupes
                $member // Fill all fields
            );
        }

    }
}
