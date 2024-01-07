<?php

namespace App\Livewire\Market;

use App\Models\Mart;
use App\Traits\LocationTrait;
use Livewire\Component;

class Index extends Component
{
    use LocationTrait;

    public Mart $mart;
    public function mount($mart) {
        $this->mountLocation();
        $this->mart = $mart;
    }
    public function render()
    {
        return view('livewire.market.index', [
            "mart" => $this->mart,
            "location" => $this->user_location,
        ])->title('Market');
    }
}
