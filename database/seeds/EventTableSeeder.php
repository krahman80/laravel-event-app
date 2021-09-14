<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

use App\Event;

class EventTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')->truncate();
        $faker = \Faker\Factory::create();
        $now = Carbon::now()->format('Y-m-d H:i:s');

        foreach (range(1, 50) as $index) {
            Event::create([
                'name' => $faker->sentence(2),
                'description' => $faker->paragraphs(1, true),
                'created_at' => $now,
                'updated_at' => $now,
            ]);
        }
    }
}
