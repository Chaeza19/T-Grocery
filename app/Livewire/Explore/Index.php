<?php

namespace App\Livewire\Explore;

use App\Models\Mart;
use App\Models\ProductCategory;
use Livewire\Component;
use App\Traits\LocationTrait;
class Index extends Component
{
    use LocationTrait;
    // public $location;
    public function mount() {
        $this->mountLocation();
        // if (session('location_name') != null && session('location_slug') != null) {
        //     $this->location["name"] = session('location_name');
        //     $this->location["slug"] = session('location_slug');
        // }else{
        //     $this->redirectRoute('home', navigate: true);
        // }
    }
    public function render()
    {
        $categories = ProductCategory::all();
        $marts = Mart::all();
        return view('livewire.explore.index', [
            "location" => $this->user_location,
            "categories" => $categories,
            "marts" => $marts,
        ])->title("Explore");
    }
}
