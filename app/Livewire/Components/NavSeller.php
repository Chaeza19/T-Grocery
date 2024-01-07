<?php

namespace App\Livewire\Components;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class NavSeller extends Component
{
    public function render()
    {
        return view('livewire.components.nav-seller');
    }

    public function logout() {
        Auth::guard('seller')->logout();
        $this->redirectRoute('signIn.index', navigate: true);
    }
}
