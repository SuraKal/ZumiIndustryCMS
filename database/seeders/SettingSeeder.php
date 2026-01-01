<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingSeeder extends Seeder {
    public function run(): void {
        $defaults = [
            [ 'name' => 'Email', 'data' => 'theamentradingplc16@gmail.com,amenbelsty9@gmail.com', 'type' => 'string' ],
            [ 'name' => 'Phone', 'data' => '+251 901 368 836,+251 912 943 311', 'type' => 'string' ],
            [ 'name' => 'Address', 'data' => 'Addis Ababa, Mexico Sengatera, Yobek Business Center', 'type' => 'string' ],
        ];
        DB::table( 'settings' )->insert( $defaults );
    }
}