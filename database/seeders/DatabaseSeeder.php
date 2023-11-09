<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // \App\Models\User::factory(10)->create();
        DB::table('users')->insert([
            'name' => "Kepala Desa",
            'email' => 'kades@gmail.com',
            'is_admin' => 'Tidak',
            'level' => 8,
            //'phone' => '085600200913',
            'password' => Hash::make('123456'),
        ]);
    }
}
