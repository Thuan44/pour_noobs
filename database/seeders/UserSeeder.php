<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "Thuan",
            'email' => "tutu@tutu.com",
            'password' => Hash::make('tutu'),
            'role' => "admin",
        ]);

        DB::table('users')->insert([
            'name' => "User",
            'email' => "user@user.com",
            'password' => Hash::make('user'),
            'role' => "user",
        ]);
    }
}
