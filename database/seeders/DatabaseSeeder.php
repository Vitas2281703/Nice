<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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

         DB::table('twill_users')->insert([
             'name' => 'admin',
             'email' => 'admin@example.com',
             'password' => Hash::make('1234'),
             'role' => 'SUPERADMIN',
             'published' => true,

         ]);
    }
}
