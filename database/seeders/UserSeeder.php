<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                "name" => "anies",
                "username" => "anies",
                "password" => Hash::make("anies123"),
                "email" => "anies@example.com",
            ],
            [
                "name" => "prabowo",
                "username" => "prabowo",
                "password" => Hash::make("prabowo123"),
                "email" => "prabowo@example.com",
            ],
            [
                "name" => "ganjar",
                "username" => "ganjar",
                "password" => Hash::make("ganjar123"),
                "email" => "ganjar@example.com",
            ],
        ];
        foreach ($users as $user) {
            User::create($user);
        }
    }
}
