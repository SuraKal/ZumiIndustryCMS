<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'code' => 'HOUSE_OF_PEOPLES_REPRESENTATIVES',
                'name' => 'House of Peoples Representatives',
                'overview' => 'UPS Expansion (Service and Maintenance/Installation).',
                'description' => 'Expanding UPS capabilities for the House of Peoples Representatives.',
                'is_visible' => true,
            ],
            [
                'code' => 'FEDERAL_PUBLIC_PROCUREMENT_SERVICE',
                'name' => 'Federal Public Procurement Service',
                'overview' => 'Generator Service & Maintenance.',
                'description' => 'Providing generator service and maintenance for the Federal Public Procurement Service.',
                'is_visible' => true,
            ],
            [
                'code' => 'UNIVERSITY_OF_GONDAR_HOSPITAL',
                'name' => 'University of Gondar Hospital',
                'overview' => 'UPS Supply and Installation.',
                'description' => 'Supplying and installing UPS systems at University of Gondar Hospital.',
                'is_visible' => true,
            ],
            [
                'code' => 'UNIVERSITY_OF_GONDAR',
                'name' => "University of Gondar",
                "overview" => "Generator Service & Maintenance.",
                "description" => "Providing generator service and maintenance for University of Gondar.",
                "is_visible" => true,
            ],
            [
                "code" => "ARBA_MINCH_UNIVERSITY",
                "name" => "Arba Minch University",
                "overview" => "Supply and Installation Automatic Transfer Switch.",
                "description" => "Supplying and installing Automatic Transfer Switches at Arba Minch University.",
                "is_visible" => true,
            ]

        ];

        foreach ($data as $project) {
            \App\Models\Project::create($project);
        }
    }
}
