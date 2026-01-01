<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductPartnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Make a seeder that creates 2 partners, each with 5 products

//         Partner name: NEO POWER
// Products: 
// 1, 10KVA EcoShield™ Series 
// Single Phase Voltage Stabilizers
// 2, 30KVA EcoShield™ Series 
// Single Phase Voltage Stabilizers
// 3, 3KVA EcoShield™ Series 
// Single Phase Voltage Stabilizers
// 4, 2KVA EcoShield™ Series 
// Single Phase Voltage Stabilizers
// 5, 5KVA EcoShield™ Series 
// Single Phase Voltage Stabilizers
// 6, 15KVA CommShield® 3P
//  Automatic AC Voltage Stabilizer
// -----

// Partner Name: AISIKAI 
// Products
// 1, SKR2-C Automatic Transfer 
// Switch Controller(ATSC)
// 2, ASKQ1 Solenoid Automatic T
// ransfer Switch(ATS)
// 3, SKT1 Motorised Automatic 
// Transfer Switch(ATS)
// 4, SKR2-B Automatic Transfer 
// Switch Controller(ATSC)
// 5, SKQ1-NBX MCCB Type Built-in Controller 
// Automatic Transfer Switch(ATS)
// 6, ASKQ6 Solenoid Automatic 
// Transfer Switch(ATS)
// 7, ASKV5-G Embedded Poles Vacuum 
// Circuit Breaker(VCB)
// 8, ASKVQC High Voltage Automatic 
// Transfer Switch Cabinet
// 9, ASKV5-T Assembly Poles Vacuum 
// Circuit Breaker(VCB)
// 10, SKR2-A Automatic Transfer 
// Switch Controller(ATSC)
// 11, ASKW3Z-G DC Frame-type 
// Disconnect Switch
// 12, ASKVQ High Voltage Automatic 
// Transfer Switch(HVATS) 


//Make the product description the name.

        $neoPowerProducts = [
            '10KVA EcoShield™ Series Single Phase Voltage Stabilizers',
            '30KVA EcoShield™ Series Single Phase Voltage Stabilizers',
            '3KVA EcoShield™ Series Single Phase Voltage Stabilizers',
            '2KVA EcoShield™ Series Single Phase Voltage Stabilizers',
            '5KVA EcoShield™ Series Single Phase Voltage Stabilizers',
            '15KVA CommShield® 3P Automatic AC Voltage Stabilizer',
        ];

        $AISIKAIProducts = [
            'SKR2-C Automatic Transfer Switch Controller(ATSC)',
            'ASKQ1 Solenoid Automatic Transfer Switch(ATS)',
            'SKT1 Motorised Automatic Transfer Switch(ATS)',
            'SKR2-B Automatic Transfer Switch Controller(ATSC)',
            'SKQ1-NBX MCCB Type Built-in Controller Automatic Transfer Switch(ATS)',
            'ASKQ6 Solenoid Automatic Transfer Switch(ATS)',
            'ASKV5-G Embedded Poles Vacuum Circuit Breaker(VCB)',
            'ASKVQC High Voltage Automatic Transfer Switch Cabinet',
            'ASKV5-T Assembly Poles Vacuum Circuit Breaker(VCB)',
            'SKR2-A Automatic Transfer Switch Controller(ATSC)',
            'ASKW3Z-G DC Frame-type Disconnect Switch',
            'ASKVQ High Voltage Automatic Transfer Switch(HVATS)',
        ];

        $neoPower = \App\Models\Partner::create([
            'name' => 'NEO POWER',
        ]);
        foreach ($neoPowerProducts as $productName) {
            \App\Models\Product::create([
                'partner_id' => $neoPower->id,
                'name' => $productName,
                'description' => $productName,
            ]);
        }

        $AISIKAI = \App\Models\Partner::create([
            'name' => 'AISIKAI',
        ]);
        foreach ($AISIKAIProducts as $productName) {
            \App\Models\Product::create([
                'partner_id' => $AISIKAI->id,
                'name' => $productName,
                'description' => $productName,
            ]);
        }
        
        


    }
}
