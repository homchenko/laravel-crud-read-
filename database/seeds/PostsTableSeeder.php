<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // демо данные
        $faker = Faker\Factory::create();

        $limit = 100;

        for ($i = 0; $i < $limit; $i++) {
            DB::table('posts')->insert([ //,
                'name' => $faker->name,
                'slug' => $faker->slug,
                'description' => $faker->text
            ]);
        }
    }
}
