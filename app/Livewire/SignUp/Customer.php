<?php

namespace App\Livewire\SignUp;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Customer extends Component
{
    #[Validate('required')]
    public $name;
    #[Validate('required|unique:users,username')]
    public $username;
    #[Validate('required|unique:users,email')]
    public $email;
    #[Validate('required|min:8')]
    public $password;
    #[Validate('required|min:8|same:password')]
    public $password_confirmation;
    public function render()
    {
        return view('livewire.sign-up.customer')->title("Sign Up Customer");;
    }

    public function register() {
        $validated = $this->validate();
        $validated["password"] = Hash::make($validated["password"]);
        User::create($validated);
        $this->redirectRoute('signIn.customer', navigate: true);
        flash("Registrasi Berhasil Silahkan Login", "success");
        $this->dispatch('show-notif');
    }
}
