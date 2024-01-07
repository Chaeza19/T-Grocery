<?php

namespace App\Livewire\Customer\Order;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.customer.order.index')->title("Pesanan");
    }
}
