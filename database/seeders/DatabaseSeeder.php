<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'nama' => 'Test User',
            'email' => 'test@example.com',
            'nohp' => '089638307725',
            'nik' => '3276043101010001',
            'alamat' => 'Depok',
            'password' => 'password'
        ]);
        User::create([
            'nama' => 'Provinsi',
            'email' => 'provinsi@example.com',
            'nohp' => '089638307725',
            'nik' => '3276043101010002',
            'alamat' => 'Depok',
            "role" => 1,
            'password' => 'password'
        ]);
        User::create([
            'nama' => 'kabupaten',
            'email' => 'kabupaten@example.com',
            'nohp' => '089638307725',
            'nik' => '3276043101010003',
            'alamat' => 'Depok',
            "role" => 2,
            'password' => 'password'
        ]);
    }
}
