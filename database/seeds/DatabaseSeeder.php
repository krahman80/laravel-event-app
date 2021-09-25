<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory(App\User::class, 4)->create()->each(function ($user) {
            $user->events()->saveMany(factory(App\Event::class, 5)->make([
                'user_id' => $user->id,
            ]));
        });
    }
}
