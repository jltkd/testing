<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach (range(1, 50) as $index) {
            DB::table('clients')->insert([
                'client_name' => $faker->company,
                'client_status'  => $faker->randomElement(['Prospect', 'Active', 'Deactive']),
                'address' => $faker->streetAddress,
                'city' => $faker->city,
                'state' => $faker->state,
                'postal_code' => $faker->postcode,
                'notes' => $faker->paragraph,
                'created_at' => $faker->dateTime($max = now()),
                'updated_at' => $faker->dateTime($max = now()),
            ]);
        }
    }
}
