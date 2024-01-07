<?php

namespace Database\Seeders;

use App\Models\ProductCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            "Bahan Pokok",
            "Buah dan Sayuran",
            "Perlengkapan Memasak",
            "Makanan & Snack",
            "Minuman",
            "Perlengkapan Sehari-hari",
            "Alat Tulis",
        ];

        foreach ($categories as $category) {
            ProductCategory::create([
                "name" => $category,
                "slug" => Str::slug($category),
            ]);
        }
    }
}
