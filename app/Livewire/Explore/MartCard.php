<?php

namespace App\Livewire\Explore;

use App\Models\Mart;
use Livewire\Component;

class MartCard extends Component
{
    public Mart $mart;
    public function render()
    {
        return view('livewire.explore.mart-card', [
            "mart" => $this->mart,
        ]);
    }
}
