<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use Faker\Factory as Faker;
class CategoriesTableDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->faker = Faker::create();
        for ($i=1; $i <=10 ; $i++) { 
            Category::create([
                "id" => $i,
                "name" => $this->faker->unique()->word,
               
            ]);
        }
        
        
    }
}
