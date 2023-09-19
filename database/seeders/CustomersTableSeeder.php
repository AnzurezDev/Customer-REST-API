<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Customer;

class CustomersTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        $customers  = [
            [ 'dni' => '123456789A', 'id_reg' => 1, 'id_com' => 1, 'email' => 'juan.perez@example.com', 'name' => 'Juan', 'last_name' => 'Perez', 'address' => '123 Oak St, Anytown, USA', 'status' => 'A', 'date_reg' => '2023-09-18 12:34:56' ],
            [ 'dni' => '987654321B', 'id_reg' => 2, 'id_com' => 5, 'email' => 'laura.gomez@example.com', 'name' => 'Laura', 'last_name' => 'Gomez', 'address' => '456 Maple Ave, Somecity, USA', 'status' => 'A', 'date_reg' => '2023-09-18 14:45:23' ],
            [ 'dni' => 'S28SZ9QG8C', 'id_reg' => 3, 'id_com' => 9, 'email' => 'carlos.rodriguez@example.com', 'name' => 'Carlos', 'last_name' => 'Rodriguez', 'address' => '789 Pine Rd, Anycity, USA', 'status' => 'A', 'date_reg' => '2023-09-18 15:30:45' ],
            [ 'dni' => '928S8WA48D', 'id_reg' => 4, 'id_com' => 10, 'email' => 'maria.hernandez@example.com', 'name' => 'Maria', 'last_name' => 'Hernandez', 'address' => '101 Oak Ave, Othercity, USA', 'status' => 'A', 'date_reg' => '2023-09-18 16:20:15' ],
            [ 'dni' => '1898D2564A', 'id_reg' => 5, 'id_com' => 14, 'email' => 'laura.martinez@example.com', 'name' => 'Laura', 'last_name' => 'Martinez', 'address' => '456 Maple St, Anothercity, USA', 'status' => 'A', 'date_reg' => '2023-09-18 17:45:10' ],
            [ 'dni' => '9873215S1E', 'id_reg' => 6, 'id_com' => 18, 'email' => 'laura.gonzalez@example.com', 'name' => 'Laura', 'last_name' => 'Gonzalez', 'address' => '456 Elm St, Othertown, USA', 'status' => 'A', 'date_reg' => '2023-09-18 17:15:30' ],
            [ 'dni' => 'D45F7813E2', 'id_reg' => 7, 'id_com' => 19, 'email' => 'mario.perez@example.com', 'name' => 'Mario', 'last_name' => 'Perez', 'address' => '789 Oak St, Anothertown, USA', 'status' => 'A', 'date_reg' => '2023-09-18 17:30:45' ],
            [ 'dni' => 'G93H71T421', 'id_reg' => 8, 'id_com' => 23, 'email' => 'laura.smith@example.com', 'name' => 'Laura', 'last_name' => 'Smith', 'address' => '456 Maple Ave, Othertown, USA', 'status' => 'A', 'date_reg' => '2023-09-19 09:15:30' ],
            [ 'dni' => 'K87P23S8T9', 'id_reg' => 9, 'id_com' => 27, 'email' => 'john.doe@example.com', 'name' => 'John', 'last_name' => 'Doe', 'address' => '123 Oak St, Smalltown, USA', 'status' => 'A', 'date_reg' => '2023-09-19 09:30:45' ],
            [ 'dni' => 'A42C89B618', 'id_reg' => 10, 'id_com' => 28, 'email' => 'jane.doe@example.com', 'name' => 'Jane', 'last_name' => 'Doe', 'address' => '789 Birch Rd, Mediumtown, USA', 'status' => 'A', 'date_reg' => '2023-09-19 09:45:15' ]
        ];

        Customer::insert( $customers );
    }
}