<?php

namespace App\Livewire\Customer\Cart;

use App\Models\Cart;
use Livewire\Attributes\On;
use Livewire\Component;

class CartSeller extends Component
{
    public $sellerId;
    #[On('addQuantity')]
    public function updateList($cart) {
    }
    public function mount($sellerId) {
        $this->sellerId = $sellerId;
    }
    
    public function render()
    {
        $carts = Cart::where('user_id', auth()->user()->id)
                ->where('isCheckout', false)
                ->whereHas('product', function ($query) {
                    $query->where('seller_id', $this->sellerId);
                })
                ->get();
                // ->with('product.seller');
        $total = 0;
        foreach ($carts as $cart) {
            $total += $cart->amount * $cart->product->price;
        }
        return view('livewire.customer.cart.cart-seller', [
            "carts" => $carts,
            "total" => $total,
        ]);
    }
}
