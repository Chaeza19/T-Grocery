<?php

namespace App\Livewire\SignIn;

use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Customer extends Component
{
    #[Validate('required')]
    public $username;
    #[Validate('required|min:8')]
    public $password;
    public function render()
    {
        return view('livewire.sign-in.customer')->title("Sign In Customer");;
    }

    public function login() {
        $validated = $this->validate();
        if (Auth::attempt($validated)) {
            return $this->redirectRoute('home', navigate:true);
        }
        $this->reset();
        flash("Username / Password salah", 'danger');
        $this->dispatch("show-notif");
    }
}
