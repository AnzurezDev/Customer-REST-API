<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Region;

class RegionsTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        $regions = [
            [ 'id_reg' => 1,'description' => 'North Region', 'status' => 'A' ],
            [ 'id_reg' => 2,'description' => 'South Region', 'status' => 'A' ],
            [ 'id_reg' => 3,'description' => 'East Region', 'status' => 'A' ],
            [ 'id_reg' => 4,'description' => 'West Region', 'status' => 'A' ],
            [ 'id_reg' => 5,'description' => 'Central Region', 'status' => 'A' ],
            [ 'id_reg' => 6,'description' => 'Coastal Region', 'status' => 'A' ],
            [ 'id_reg' => 7,'description' => 'Mountain Region', 'status' => 'A' ],
            [ 'id_reg' => 8,'description' => 'Urban Region', 'status' => 'A' ],
            [ 'id_reg' => 9,'description' => 'Rural Region', 'status' => 'A' ],
            [ 'id_reg' => 10,'description' => 'Suburban Region', 'status' => 'A' ],
        ];

        Region::insert( $regions );
    }
}