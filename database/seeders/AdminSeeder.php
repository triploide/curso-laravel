<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('admins')->insert([
            [
                'name' => 'Admin',
                'email' => 'admin@mail.com',
                'password' => \Hash::make(env('ADMIN_PASSWORD')),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
