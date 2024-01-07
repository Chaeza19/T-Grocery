<?php

namespace App\Livewire\Components;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Nav extends Component
{
    public function render()
    {
        return view('livewire.components.nav');
    }

    public function logout() {
        Auth::logout();
        $this->redirectRoute('signIn.index', navigate: true);
    }
}
