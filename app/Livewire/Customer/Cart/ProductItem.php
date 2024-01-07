<?php

namespace App\Livewire\Customer\Cart;

use App\Models\Cart;
use Livewire\Component;

class ProductItem extends Component
{
    public Cart $cart;
    
    public function render()
    {
        return view('livewire.customer.cart.product-item');
    }

    public function addQuantity() {
        $cart = Cart::find($this->cart->id);
        $cart->update(["amount" => $cart->amount + 1]);
        $this->dispatch("addQuantity", $cart->id);
    }

    public function reduceQuantity() {
        
    }
}
