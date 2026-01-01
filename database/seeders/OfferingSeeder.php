<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OfferingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $offerings = [
            [
                'name' => 'Electrical Installation',
                'slug' => 'electrical-installation',
                'description' => 'Design and installation for residential, commercial, and industrial buildings. Wiring, power distribution, and lighting solutions.',
            ],
            [
                'name' => 'Electro-Mechanical Works',
                'slug' => 'electro-mechanical-works',
                'description' => 'Installation and maintenance of integrated systems. Smooth operation through electrical-mechanical integration.',
            ],
            [
                'name' => 'CCTV & Security Systems',
                'slug' => 'cctv-security-systems',
                'description' => 'Design and installation of surveillance systems. Access control and alarm systems for complete security.',
            ],
            [
                'name' => 'Communication Systems',
                'slug' => 'communication-systems',
                'description' => 'Installation of PBX systems for efficient telecommunication. Data networking solutions to enhance connectivity.',
            ],
            [
                'name' => 'Generator Installation & Maintenance',
                'slug' => 'generator-installation-maintenance',
                'description' => 'Reliable installation and servicing of generators to provide uninterrupted power supply during outages.',
            ],
            [
                'name' => 'Fire Alarm Installation',
                'slug' => 'fire-alarm-installation',
                'description' => 'Design, installation, and maintenance of fire alarm systems for early detection and enhanced safety compliance.',
            ],
            [
                'name' => 'Maintenance Services',
                'slug' => 'maintenance-services',
                'description' => 'Scheduled maintenance and troubleshooting. Emergency repairs to reduce downtime.',
            ],
        ];

        foreach ($offerings as $offeringData) {
            \App\Models\Offering::create($offeringData);
        }
    }
}
