<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Commune;

class CommunesTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        $communes = [
            [ 'id_com' =>1, 'id_reg' => 1, 'description' => 'Commune 1 in North Region', 'status' => 'A' ],
            [ 'id_com' =>2, 'id_reg' => 1, 'description' => 'Commune 2 in North Region', 'status' => 'A' ],
            [ 'id_com' =>3, 'id_reg' => 1, 'description' => 'Commune 3 in North Region', 'status' => 'A' ],
            [ 'id_com' =>4, 'id_reg' => 2, 'description' => 'Commune 1 in South Region', 'status' => 'A' ],
            [ 'id_com' =>5, 'id_reg' => 2, 'description' => 'Commune 2 in South Region', 'status' => 'A' ],
            [ 'id_com' =>6, 'id_reg' => 2, 'description' => 'Commune 3 in South Region', 'status' => 'A' ],
            [ 'id_com' =>7, 'id_reg' => 3, 'description' => 'Commune 1 in East Region', 'status' => 'A' ],
            [ 'id_com' =>8, 'id_reg' => 3, 'description' => 'Commune 2 in East Region', 'status' => 'A' ],
            [ 'id_com' =>9, 'id_reg' => 3, 'description' => 'Commune 3 in East Region', 'status' => 'A' ],
            [ 'id_com' =>10, 'id_reg' => 4, 'description' => 'Commune 1 in West Region', 'status' => 'A' ],
            [ 'id_com' =>11, 'id_reg' => 4, 'description' => 'Commune 2 in West Region', 'status' => 'A' ],
            [ 'id_com' =>12, 'id_reg' => 4, 'description' => 'Commune 3 in West Region', 'status' => 'A' ],
            [ 'id_com' =>13, 'id_reg' => 5, 'description' => 'Commune 1 in Central Region', 'status' => 'A' ],
            [ 'id_com' =>14, 'id_reg' => 5, 'description' => 'Commune 2 in Central Region', 'status' => 'A' ],
            [ 'id_com' =>15, 'id_reg' => 5, 'description' => 'Commune 3 in Central Region', 'status' => 'A' ],
            [ 'id_com' =>16, 'id_reg' => 6, 'description' => 'Commune 1 in Coastal Region', 'status' => 'A' ],
            [ 'id_com' =>17, 'id_reg' => 6, 'description' => 'Commune 2 in Coastal Region', 'status' => 'A' ],
            [ 'id_com' =>18, 'id_reg' => 6, 'description' => 'Commune 3 in Coastal Region', 'status' => 'A' ],
            [ 'id_com' =>19, 'id_reg' => 7, 'description' => 'Commune 1 in Mountain Region', 'status' => 'A' ],
            [ 'id_com' =>20, 'id_reg' => 7, 'description' => 'Commune 2 in Mountain Region', 'status' => 'A' ],
            [ 'id_com' =>21, 'id_reg' => 7, 'description' => 'Commune 3 in Mountain Region', 'status' => 'A' ],
            [ 'id_com' =>22, 'id_reg' => 8, 'description' => 'Commune 1 in Urban Region', 'status' => 'A' ],
            [ 'id_com' =>23, 'id_reg' => 8, 'description' => 'Commune 2 in Urban Region', 'status' => 'A' ],
            [ 'id_com' =>24, 'id_reg' => 8, 'description' => 'Commune 3 in Urban Region', 'status' => 'A' ],
            [ 'id_com' =>25, 'id_reg' => 9, 'description' => 'Commune 1 in Rural Region', 'status' => 'A' ],
            [ 'id_com' =>26, 'id_reg' => 9, 'description' => 'Commune 2 in Rural Region', 'status' => 'A' ],
            [ 'id_com' =>27, 'id_reg' => 9, 'description' => 'Commune 3 in Rural Region', 'status' => 'A' ],
            [ 'id_com' =>28, 'id_reg' => 10, 'description' => 'Commune 1 in Suburban Region', 'status' => 'A' ],
            [ 'id_com' =>29, 'id_reg' => 10, 'description' => 'Commune 2 in Suburban Region', 'status' => 'A' ],
            [ 'id_com' =>30, 'id_reg' => 10, 'description' => 'Commune 3 in Suburban Region', 'status' => 'A' ],
        ];

        Commune::insert( $communes );
    }
}