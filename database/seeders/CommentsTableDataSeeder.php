<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Comment;
use Faker\Factory as Faker;
class CommentsTableDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->faker = Faker::create();
        for ($i=1; $i <=200 ; $i++) { 
            Comment::create([
                "id" => $i,
                "content" => $this->faker->text,
                "article_id" => $this->faker->numberBetween($min = 1, $max = 50), 
                "user_id" => $this->faker->numberBetween($min = 2, $max = 11), 
                'created_at' => $this->faker->date($format = 'Y-m-d') ,
            ]);
        }
    }
}
