<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('categories')->truncate();

        // $faker = \Faker\Factory::create();
        // $now = Carbon::now()->format('Y-m-d H:i:s');

        factory(App\Category::class, 10)->create()->each(function ($category) {
            $event = factory(App\Event::class, 5)->make();
            $category->events()->saveMany($event);
        });

        // DB::table('categories')->insert([
        //     [
        //         'name' => 'Workshop',
        //         'description' => $faker->text,
        //         'created_at' => $now,
        //         'updated_at' => $now,
        //     ],
        //     [
        //         'name' => 'Seminar',
        //         'description' => $faker->text,
        //         'created_at' => $now,
        //         'updated_at' => $now,
        //     ],
        //     [
        //         'name' => 'Flea Market',
        //         'description' => $faker->text,
        //         'created_at' => $now,
        //         'updated_at' => $now,
        //     ],
        //     [
        //         'name' => 'Music Class',
        //         'description' => $faker->text,
        //         'created_at' => $now,
        //         'updated_at' => $now,
        //     ],
        //     [
        //         'name' => 'Auctions',
        //         'description' => $faker->text,
        //         'created_at' => $now,
        //         'updated_at' => $now,
        //     ],
        //     [
        //         'name' => 'Music Festivals',
        //         'description' => $faker->text,
        //         'created_at' => $now,
        //         'updated_at' => $now,
        //     ],
        //     [
        //         'name' => 'Food Stall',
        //         'description' => $faker->text,
        //         'created_at' => $now,
        //         'updated_at' => $now,
        //     ],
        //     [
        //         'name' => 'Art Class',
        //         'description' => $faker->text,
        //         'created_at' => $now,
        //         'updated_at' => $now,
        //     ],
        // ]
        // );
    }
}
