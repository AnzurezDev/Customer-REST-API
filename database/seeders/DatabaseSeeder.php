<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $this->call([
            RegionsTableSeeder::class,
            CommunesTableSeeder::class,
            CustomersTableSeeder::class,
            UsersTableSeeder::class
        ]);
    }
}