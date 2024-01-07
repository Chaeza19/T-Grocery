<?php

namespace App\Livewire\SignUp;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.sign-up.index')->title("Sign Up");
    }
}
