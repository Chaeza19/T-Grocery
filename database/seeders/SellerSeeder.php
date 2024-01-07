<?php

namespace Database\Seeders;

use App\Models\Seller;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class SellerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sellers = [
            [
                "name" => "hasirama",
                "username" => "hasirama",
                "password" => Hash::make("hasirama123"),
                "email" => "hasirama@example.com",
                "mart_id" => 1,
            ],
            [
                "name" => "tobirama",
                "username" => "tobirama",
                "password" => Hash::make("tobirama123"),
                "email" => "tobirama@example.com",
                "mart_id" => 1,
            ],
            [
                "name" => "hiruzen",
                "username" => "hiruzen",
                "password" => Hash::make("hiruzen123"),
                "email" => "hiruzen@example.com",
                "mart_id" => 2,
            ],
            [
                "name" => "minato",
                "username" => "minato",
                "password" => Hash::make("minato123"),
                "email" => "minato@example.com",
                "mart_id" => 2,
            ],
            [
                "name" => "tsunade",
                "username" => "tsunade",
                "password" => Hash::make("tsunade123"),
                "email" => "tsunade@example.com",
                "mart_id" => 3,
            ],
            [
                "name" => "kakasi",
                "username" => "kakasi",
                "password" => Hash::make("kakasi123"),
                "email" => "kakasi@example.com",
                "mart_id" => 3,
            ],
        ];
        foreach ($sellers as $seller) {
            Seller::create($seller);
        }
    }
}
