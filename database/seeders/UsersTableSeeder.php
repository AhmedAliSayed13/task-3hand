<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            "id" => 1,
            "name" => 'Dr. Darren Elder',
            "email" => 'admin@gmail.com',
            "password" => '$2y$10$wN/OoMc2sempSN8Kz3iFOOLSXz93UyJfkDahudqC39fXTSbWUID3e',//password:123456789
            "role_id" => 1,
        ]);
        User::create([
            "id" => 2,
            "name" => 'Ahmed Ali',
            "email" => 'user@gmail.com',
            "password" => '$2y$10$wN/OoMc2sempSN8Kz3iFOOLSXz93UyJfkDahudqC39fXTSbWUID3e',//password:123456789
            "role_id" => 2,
        ]);
        $this->faker = Faker::create();
        for ($i=3; $i <=11 ; $i++) { 
            User::create([
                "id" => $i,
                "name" => $this->faker->firstName.' '.$this->faker->lastName,
                "email" => $this->faker->unique()->email,
                "password" => '$2y$10$wN/OoMc2sempSN8Kz3iFOOLSXz93UyJfkDahudqC39fXTSbWUID3e',//password:123456789
                "role_id" => 2,
            ]);
        }
    }
}
