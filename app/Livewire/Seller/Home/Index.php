<?php

namespace App\Livewire\Seller\Home;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.seller.home.index')->title("Seller");
    }
}
