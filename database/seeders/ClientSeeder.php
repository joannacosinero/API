<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'Joanna Marie Cosinero',
                'address' => 'Pinayagan Norte Tubigon, Bohol',
                'phone' => '09102727978',
                'capitalization' => 1000.00,
                'loan' => 12000.00
            ],

            [
                'name' => 'Juvy Cook',
                'address' => 'Pooc Oriental Tubigon, Bohol',
                'phone' => '09123789423',
                'capitalization' => 1300.00,
                'loan' => 10000.00
            ],

            [
                'name' => 'Jasmine Bulate',
                'address' => 'Inabanga, Bohol',
                'phone' => '09102894781',
                'capitalization' => 1120.00,
                'loan' => 9000.00
            ],
        ];

        foreach($data as $client){
            \App\Client::create($client);
        }
    }
    
}
