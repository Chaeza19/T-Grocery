<?php

namespace App\Livewire\SignUp;

use App\Models\Mart;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Seller extends Component
{
    #[Validate('required')]
    public $name;
    #[Validate('required|unique:sellers,username')]
    public $username;
    #[Validate('required|unique:sellers,email')]
    public $email;
    #[Validate('required|min:8')]
    public $password;
    #[Validate('required|min:8|same:password')]
    public $password_confirmation;
    #[Validate('required|exists:marts,id')]
    public $mart_id;
    public function render()
    {
        $marts = Mart::all();
        return view('livewire.sign-up.seller', [
            "marts" => $marts,
        ])->title("Sign Up Seller");;
    }
    public function register() {
        $validated = $this->validate();
        $validated["password"] = Hash::make($validated["password"]);
        \App\Models\Seller::create($validated);
        $this->redirectRoute('signIn.seller', navigate: true);
        flash("Registrasi Berhasil Silahkan Login", "success");
        $this->dispatch('show-notif');
    }
}
