<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('genres')->insert([
            [
                'value' => 'Acción',
                'slug' => 'accion',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'value' => 'Comedia',
                'slug' => 'comedia',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'value' => 'Drama',
                'slug' => 'drama',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'value' => 'Terror',
                'slug' => 'terror',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
