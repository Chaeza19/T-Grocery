<?php

namespace Database\Seeders;

use App\Models\Location;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $locations = [
            "Asrama Putra Gedung 1",
            "Asrama Putra Gedung 2",
            "Asrama Putra Gedung 3",
            "Asrama Putra Gedung 4",
            "Asrama Putra Gedung 5",
            "Asrama Putra Gedung 6",
            "Asrama Putra Gedung 7",
            "Asrama Putra Gedung 8",
            "Asrama Putra Gedung 9",
            "Asrama Putra Gedung 10",
            "Asrama Putri Gedung 11",
            "Asrama Putri Gedung 12",
            "Asrama Putri Gedung A",
            "Asrama Putri Gedung B",
            "Asrama Putri Gedung C",
            "Asrama Putri Gedung D",
            "Asrama Putri Gedung E",
        ];
        foreach ($locations as $location) {
            Location::create([
                "name" => $location,
                "slug" => Str::slug($location),
            ]);
        }
    }
}
