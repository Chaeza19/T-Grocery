<?php

namespace App\Livewire\Explore;

use App\Models\ProductCategory;
use Livewire\Component;

class CategoryCard extends Component
{
    public ProductCategory $category;
    public function render()
    {
        return view('livewire.explore.category-card', [
            "category" => $this->category,
        ]);
    }
}
