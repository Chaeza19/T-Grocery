<?php

namespace App\Livewire\Seller\Order;

use Livewire\Component;
use App\Models\Order as OrderModel;

class OrderList extends Component
{
    public function render()
    {
        // $orders = OrderModel::where("seller_id", Auth::user()->id)->latest();
        $orders = OrderModel::latest();
        return view('livewire.seller.order.order-list', [
            "orders" => $orders,
        ])->title("Orderan Masuk");
    }
}
