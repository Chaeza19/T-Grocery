<?php

namespace App\Http\Controllers\Costumer;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(ProductCategory $category)
    {
        return view("pages.user.category", [
            "title" => "Category",
            "category" => $category,
            "products" => Product::where("category_id", $category->id)->get(),
        ]);
    }
}
