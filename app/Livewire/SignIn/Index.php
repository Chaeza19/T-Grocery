<?php

namespace App\Livewire\SignIn;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.sign-in.index')->title("Sign In");
    }
}
