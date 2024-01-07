<?php

namespace App\Livewire\Seller\Product;

use App\Livewire\Forms\seller\ProductForm;
use App\Models\ProductCategory;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;
    public ProductForm $form;
    public function render()
    {
        $categories = ProductCategory::orderBy("name", "asc")->get();
        return view('livewire.seller.product.create', [
            "categories" => $categories,
        ])->title("Tambah Produk");
    }

    public function save() {
        $this->form->store();
        $this->redirectRoute('seller.index', navigate: true);
        flash('Produk Berhasil Ditambahkan', 'success');
        $this->dispatch('show-notif');
    }
}
