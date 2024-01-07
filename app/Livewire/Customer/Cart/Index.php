<?php

namespace App\Livewire\Customer\Cart;

use App\Models\Cart;
use App\Models\Seller;
use App\Traits\LocationTrait;
use Livewire\Attributes\On;
use Livewire\Component;

class Index extends Component
{
    use LocationTrait;
    public function mount() {
        $this->mountLocation();
    }
    public function render()
    {
        // $sellers = Cart::where('user_id', auth()->user()->id)->where('isCheckout', 0)
        //         ->with('product.seller')
        //         ->get()->groupBy(function ($item) {
        //             return $item->product->seller_id;
        //         })->keys()->all();
        $sellers = Seller::whereHas('products', function ($query) {
                        $query->whereHas('carts', function ($query) {
                            $query->where('isCheckout', false)
                                ->where('user_id', auth()->user()->id);
                        });
                    })->pluck('id')->unique();
        return view('livewire.customer.cart.index',[
            "location" => $this->user_location,
            "sellers" => $sellers,
        ])->title("Keranjang");
    }
}
