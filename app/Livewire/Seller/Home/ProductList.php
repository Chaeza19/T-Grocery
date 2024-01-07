<?php

namespace App\Livewire\Seller\Home;

use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\On;
use Livewire\Component;

class ProductList extends Component
{
    #[On('productDeleted')]
    public function updateList($product) {
        flash('Produk Berhasil Dihapus', 'danger');        
        $this->dispatch('show-notif');
        $this->dispatch("close-modal");
    }
    public function render()
    {
        $products = Product::where("seller_id", Auth::guard('seller')->user()->id)->latest()->get();
        return view('livewire.seller.home.product-list', [
            "products" => $products,
        ]);
    }
}
