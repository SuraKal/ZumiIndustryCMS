<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'title' => 'What services does your company offer?',
                'message' => 'We specialize in electrical installation, CCTV and security systems, communication systems, generator services, fire alarm solutions, and maintenance support.',
                'is_visible' => true,
            ],
            [
                'title' => 'How long does a typical project take?',
                'message' => 'Project timelines vary based on scope, but we ensure fast response and efficient delivery, typically completing installations within 2-6 weeks.',
                'is_visible' => true,
            ],
            [
                'title' => 'Do you provide maintenance after installation?',
                'message' => 'Yes, we offer preventive maintenance, troubleshooting, and emergency repair services tailored to each client needs.',
                'is_visible' => true,
            ],
            [
                'title' => 'What industries do you serve?',
                'message' => 'We serve hotels & resorts, hospitals & healthcare facilities, government offices, factories & industrial plants, warehouses & logistics centers, commercial buildings, and residential developments.',
                'is_visible' => true,
            ],
            [
                'title' => 'How can I contact you for a consultation?',
                'message' => 'Reach us at +251 901 368 836 or email theamentradingplc16@gmail.com for a consultation.',
                'is_visible' => true,
            ]
        ];

        foreach ($data as $faq) {
            \App\Models\Faq::create($faq);
        }
    }
}
