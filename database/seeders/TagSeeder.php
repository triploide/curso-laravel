<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('tags')->insert([
            [
                'value' => 'Recomendada',
                'slug' => 'recomendada',
            ],
            [
                'value' => 'Familiar',
                'slug' => 'familiar',
            ],
            [
                'value' => 'Clásica',
                'slug' => 'clasica',
            ],
            [
                'value' => 'Recomendada',
                'slug' => 'recomendada-1',
            ],
            [
                'value' => 'Familiar',
                'slug' => 'familiar-1',
            ],
            [
                'value' => 'Clásica',
                'slug' => 'clasica-1',
            ],
        ]);
    }
}
