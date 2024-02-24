<?php

namespace Database\Seeders;

use App\Models\Jurusan;
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
            'name' => 'Naisa Alifia Yuriza',
            'email' => 'naisa@gmail.com',
            'role' => 'guru',
            'password' => bcrypt('love'),
        ]);

        Jurusan::create([
            'nama' => 'Rekayasa Perangkat Lunak',
        ]);
        Jurusan::create([
            'nama' => 'Desain Komunikasi Visual',
        ]);
    }
}
