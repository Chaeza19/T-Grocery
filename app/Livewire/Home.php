<?php

namespace App\Livewire;

use App\Models\Location;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Cookie;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Component;


class Home extends Component
{
    #[Title("T-Grocery")]
    #[Validate('required|exists:locations,slug')]
    public $slug;
    public function render()
    {
        $locations = Location::all();
        return view('livewire.home', [
            "locations" => $locations,
        ]);
    }
    public function exploreLocation() {
        $this->validate();
        $location = Location::where('slug', $this->slug)->first();
        session(['location_name' => "$location->name"]);
        session(['location_slug' => "$location->slug"]);
        $this->redirectRoute('explore',navigate: true);
    }
}
