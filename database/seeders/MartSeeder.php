<?php

namespace Database\Seeders;

use App\Models\Mart;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class MartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            "T - Mart Putri",
            "T - Mart Putra",
            "TJ - Mart",
        ];
        foreach ($categories as $category) {
            Mart::create([
                "name" => $category,
                "slug" => Str::slug($category),
            ]);
        }
    }
}
