<?php

namespace App\Http\Controllers\Costumer;

use App\Http\Controllers\Controller;
use App\Models\Mart;
use App\Models\Product;
use Illuminate\Http\Request;

class MarketController extends Controller
{
    public function index(Mart $mart) {
        $product = Product::all();
        // set product where mart_id seller product is same $mart->id
        return view("pages.user.market", [
            "title" => "Market",
            "mart" => $mart,
            "products" => $product,
        ]);
    }
}
