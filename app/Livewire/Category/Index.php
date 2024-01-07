<?php

namespace App\Livewire\Category;

use App\Models\ProductCategory;
use App\Traits\LocationTrait;
use Livewire\Component;

class Index extends Component
{
    use LocationTrait;
    public function mount(){
        $this->mountLocation();
    }
    public ProductCategory $category;
    public function render()
    {
        return view('livewire.category.index', [
            "category" => $this->category,
            "location" => $this->user_location,
        ])->title("Kategory");
    }
}
