<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();

        if (in_array(config('app.env'), ['local', 'test'])) {
            // \App\Models\User::factory(10)->create();
            $this->call([
                UserSeeder::class,
            ]);
        }

        $this->call([
            GenreSeeder::class,
            TagSeeder::class,
            AdminSeeder::class,
        ]);
    }
}
