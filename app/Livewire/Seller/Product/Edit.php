<?php

namespace App\Livewire\Seller\Product;

use App\Livewire\Forms\seller\ProductForm;
use App\Models\Product;
use App\Models\ProductCategory;
use Livewire\Component;
use Livewire\WithFileUploads;

class Edit extends Component
{
    use WithFileUploads;
    public ProductForm $form;
    public Product $product;
    public function mount(Product $product) {
        $this->form->setProduct($product);
    }

    public function render()
    {
        $categories = ProductCategory::orderBy("name", "asc")->get();
        return view('livewire.seller.product.edit', [
            "categories" => $categories,
            "product" => $this->product,
        ])->title("Edit Produk");
    }

    public function update() {
        $this->form->update();
        $this->redirectRoute('seller.index', navigate:true);
        flash('Produk Berhasil Diedit', 'success');
        $this->dispatch('show-notif');
    }
}
