<?php

namespace App\Livewire\Components;

use App\Models\Cart;
use App\Models\Product;
use Livewire\Component;

class ProductCard extends Component
{
    public Product $product;
    public $page;
    public function render()
    {
        return view('livewire.components.product-card', [
            "product" => $this->product,
            "page" => $this->page,
        ]);
    }

    public function addToCart() {
        if (auth()->check()) {
            $checkCart = Cart::where('user_id', auth()->user()->id)
                        ->where('product_id', $this->product->id)
                        ->where('isCheckout', 0)->get();
            if (count($checkCart) > 0) {
                $checkCart[0]->update(["amount" => $checkCart[0]->amount + 1]);
            }else{
                Cart::create([
                    "user_id" => auth()->user()->id,
                    "product_id" => $this->product->id,
                    "amount" => 1,
                ]);
            }
            flash("Produk ditambahkan ke keranjang", "success");
            $this->dispatch('show-notif');
        }else{
            flash("Login dahulu untuk menambahkan produk ke keranjang", "danger");
            $this->dispatch('show-notif');
        }
        
    }
}
