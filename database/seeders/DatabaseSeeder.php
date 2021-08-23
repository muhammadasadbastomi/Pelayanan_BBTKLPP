<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'nama' => 'Admin',
            'nip' => '1123123132',
            'username' => 'admin',
            'password' => Hash::make('123'),
            'alamat' => 'banjarbaru',
            'jk' => 'Laki-laki',
            'no_hp' => '087778989899',
            'foto' => 'default.png',
            'role' => '1',
            'status' => '1',
        ]);

    }
}
