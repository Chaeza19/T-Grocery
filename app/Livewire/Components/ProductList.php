<?php

namespace App\Livewire\Components;

use App\Models\Product;
use Livewire\Component;

class ProductList extends Component
{
    public $groupBy;
    public $groupId;
    public $page;
    public function render()
    {
        $groupId = $this->groupId;
        if ($this->groupBy == "mart") {
            $products = Product::whereHas('seller', function ($query) use($groupId) {
                $query->where('mart_id', $groupId);
            })->get();
        } else {
            $products = Product::where('category_id', $groupId)->get();
        }
        
        return view('livewire.components.product-list', [
            "products" => $products,
            "page" => $this->page,
        ]);
    }
}
