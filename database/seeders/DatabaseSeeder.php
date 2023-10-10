<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Dava Rezza',
            'email' => 'darez@gmail.com',
            'password' => bcrypt('123')
        ]);
    }
}
