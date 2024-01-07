<?php

namespace App\Livewire\SignIn;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Seller extends Component
{
    #[Validate('required')]
    public $username;
    #[Validate('required|min:8')]
    public $password;
    public function render()
    {
        return view('livewire.sign-in.seller')->title("Sign In Seller");
    }
    public function login() {
        $validated = $this->validate();
        if (Auth::guard('seller')->attempt($validated)) {
            return $this->redirectRoute('seller.index', navigate:true);
        }
        $this->reset();
        flash("Username / Password salah", 'danger');
        $this->dispatch("show-notif");
    }
}
