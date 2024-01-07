<?php

namespace App\Livewire\Forms\seller;

use App\Models\Product;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\Validate;
use Livewire\Form;
use Livewire\WithFileUploads;
use Spatie\Flash\Flash;

class ProductForm extends Form
{
    use WithFileUploads;

    public ?Product $product;

    #[Validate("required|string|min:5")]
    public $name;
    #[Validate("required|string")]
    public $description;
    #[Validate("required|numeric|min:0")]
    public $price;
    #[Validate("required|exists:product_categories,id")]
    public $category_id;
    #[Validate("nullable|sometimes|image")]
    public $image;

    public $seller_id = 1;

    public function setProduct(Product $product) {
        $this->product = $product;
        $this->name = $product->name;
        $this->description = $product->description;
        $this->price = $product->price;
        $this->category_id = $product->category_id;
    }
    public function store() {
        $validated = $this->validate();
        $validated["seller_id"] = $this->seller_id;
        if ($this->image) {
            $validated["image"] = $this->image->storePublicly("product");
        }
        Product::create($validated);
    }

    public function update() {
        $validated = $this->validate();
        $validated["seller_id"] = $this->seller_id;
        if ($this->image) {
            if (Storage::exists($this->image)) {
                Storage::delete($this->image);
            }
            $validated["image"] = $this->image->storePublicly("product");
        }else {
            unset($validated["image"]);
        }
        $this->product->update($validated);
    }

    public function delete(){
        $this->product->delete();
    }
}
