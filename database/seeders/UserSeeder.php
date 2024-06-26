<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(5)->create();

        User::create([
            'name' => "Admin Flixie",
            'email' => "superadmin@gmail.com",
            'username' => "superadmin",
            'password' => bcrypt("12345"),
            'gender' => "L",
            'role' => "admin",
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'name' => "Hayya WarLok",
            'email' => "hayya@gmail.com",
            'username' => "hayya",
            'password' => bcrypt("12345"),
            'gender' => "P",
            'role' => "member",
            'remember_token' => Str::random(10),
        ]);
    }
}
