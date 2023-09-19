<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UsersTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        $users = [
            [ 'name' => 'Admin User', 'password' => Hash::make( 'admin' ) , 'email' => 'admin@email.com', 'status' => 'A' ],
            [ 'name' => 'Test User', 'password' => Hash::make( 'test' ) , 'email' => 'test@email.com', 'status' => 'I' ],
        ];

        User::insert( $users );
    }
}