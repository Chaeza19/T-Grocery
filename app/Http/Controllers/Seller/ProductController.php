<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::latest();
        return view("pages.seller.mart", [
            "title" => "Mart Product",
            "products" => $products,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("pages.seller.product.create", [
            "title" => "Create Product",
            "categories" => ProductCategory::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            "name" => "required|string",
            "description" => "required|string",
            "price" => "required|numeric|min:0",
            "image" => "required|image",
            "category_id" => "required|exists:product_categories,id",
        ]);
        try {
            $validated["seller_id"] = auth()->user()->id;
            // $validated["seller_id"] = 1;
            if ($request->file("image")) {
                $validated["image"] = $request->file("image")->storePublicly("product");
            }
            Product::create($validated);
            return redirect()->route("admin.seller.mart")->with("success", "Produk berhasil ditambahkan");
        } catch (\Throwable $th) {
            return back()->with("danger", "Produk gagal ditambahkan");
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view("pages.seller.product.edit", [
            "title" => "Edit Product",
            "categories" => ProductCategory::all(),
            "product" => $product,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $validated = $request->validate([
            "name" => "required|string",
            "description" => "required|string",
            "price" => "required|numeric|min:0",
            "image" => "nullable|image",
            "category_id" => "required|exists:product_categories,id",
        ]);
        try {
            if ($request->file("image")) {
                if ($product->image && Storage::exists($product->image)) {
                    Storage::delete($product->image);
                }
                $validated["image"] = $request->file("image")->storePublicly("product");
            } else {
                unset($validated["image"]);
            }
            $product->update($validated);
            return redirect()->route("admin.seller.mart")->with("success", "Produk berhasil diedit");
        } catch (\Throwable $th) {
            return back()->with("success", "Produk gagal diedit");
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        if ($product->image && Storage::exists($product->image)) {
            Storage::delete($product->image);
        }
        $product->delete();
    }
}
