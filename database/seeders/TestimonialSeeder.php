<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder {
    /**
    * Run the database seeds.
    */

    public function run(): void {
        $defaults = [
            [
                'author_name' => 'Mr Amen',
                'author_position' => 'CEO/Founder',
                'content' => 'We have built a reputation for delivering dependable engineering solutions that combine safety, innovation, and quality craftsmanship.',
                'is_visible' => true,
            ],
            // Build other 3 dummy testimonials
            [
                'author_name' => 'Sara Johnson',
                'author_position' => 'Project Manager, Addis Ababa',
                'content' => 'Their team transformed our facility with top-notch electrical installations—on time and within budget!',
                'is_visible' => true,
            ],
            [
                'author_name' => 'David Kim',
                'author_position' => 'Facilities Director, Nairobi',
                'content' => 'Reliable and efficient service from Amen Trading. Their maintenance support keeps our operations running smoothly.',
                'is_visible' => true,
            ],
            [
                'author_name' => 'Linda Mwangi',
                'author_position' => 'Operations Head, Kampala',
                'content' => 'From CCTV to fire alarms, their innovative solutions have significantly enhanced our security infrastructure.',
                'is_visible' => true,
            ]
        ];

        foreach ( $defaults as $member ) {
            Testimonial::updateOrCreate(
                [ 'author_name' => $member[ 'author_name' ] ], // Unique key – prevents dupes
                $member // Fill all fields
            );
        }
    }
}
