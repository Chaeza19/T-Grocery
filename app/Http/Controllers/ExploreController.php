<?php

namespace App\Http\Controllers;

use App\Models\Location;
use App\Models\Mart;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class ExploreController extends Controller
{
    public function index(Location $location)
    {
        return view("pages.explore", [
            "title" => "Explore",
            "location" => $location,
            "categories" => ProductCategory::all(),
            "marts" => Mart::all(),
        ]);
    }
}
