<?php

namespace App\Livewire\Customer\Order;

use Livewire\Component;

class Show extends Component
{
    public function render()
    {
        return view('livewire.customer.order.show')->title("Informasi Pesanan");
    }
}
