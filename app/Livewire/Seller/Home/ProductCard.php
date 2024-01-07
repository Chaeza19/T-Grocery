<?php

namespace App\Livewire\Seller\Home;

use App\Livewire\Forms\seller\ProductForm;
use App\Models\Product;
use Livewire\Component;
use Spatie\Flash\Flash;

class ProductCard extends Component
{
    public Product $product;
    public ProductForm $form;

    public function mount(){
        $this->form->setProduct($this->product);
    }
    public function render()
    {
        return view('livewire.seller.home.product-card', [
            "product" => $this->product,
        ]);
    }

    public function delete() {
        $this->form->delete();
        // $this->dispatch("close-modal");
        $this->dispatch("productDeleted", $this->product->id);
    }
}
