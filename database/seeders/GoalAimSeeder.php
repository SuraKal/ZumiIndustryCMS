<?php

namespace Database\Seeders;

use App\Models\Goal;
use Illuminate\Database\Seeder;

class GoalAimSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $goals = [
            [
                'name' => 'Short-Term (1-3 Years)',
                'aims' => [
                    'Increase domestic production capacity',
                    'Advanced laboratory testing expansion',
                    'Expand market in major Ethiopian cities',
                    'Targeted marketing & brand awareness',
                    'Develop employee training programs to improve skills in modern manufacturing and technology',
                    'Begin adopting environmentally friendly practices in production and packaging',
                ],
            ],
            [
                'name' => 'Long-Term (3-10 Years)',
                'aims' => [
                    'Lead East African energy markets',
                    'R&D for next-gen battery tech',
                    'Global export & international standards',
                    'Full integration of eco-friendly practices',
                    'Fully integrate sustainable production practices and support local communities',
                    'Achieve sustainable profitability while maintaining competitive pricing and high product quality',
                    'Establish ZUMI INDUSTRY PLC as a trusted provider of eco-friendly, reliable energy solutions in Africa',
                ],
            ],
        ];

        foreach ($goals as $goalData) {
            $goal = Goal::query()->firstOrCreate([
                'name' => $goalData['name'],
            ]);

            foreach ($goalData['aims'] as $aimContent) {
                $goal->aims()->firstOrCreate([
                    'content' => $aimContent,
                ]);
            }
        }
    }
}
