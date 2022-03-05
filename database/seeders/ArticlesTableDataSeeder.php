<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Article;
use Faker\Factory as Faker;
class ArticlesTableDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->faker = Faker::create();
        for ($i=1; $i <=50 ; $i++) { 
            Article::create([
                "id" => $i,
                "title" => $this->faker->unique()->word,
                "subtitle" => $this->faker->sentence,
                "describe" => $this->faker->text,
                "active" => 1,
                "category_id" => $this->faker->numberBetween($min = 1, $max = 10), 
                "user_id" => 1, 
                'created_at' => $this->faker->date($format = 'Y-m-d', $max = 'now') ,
            ]);
        }
    }
}
