<?php

namespace App\Traits;

trait LocationTrait{
    public $user_location;
    public function mountLocation()
    {
        if (session('location_name') != null && session('location_slug') != null) {
            $this->user_location["name"] = session('location_name');
            $this->user_location["slug"] = session('location_slug');
        } else {
            $this->redirectRoute('home', navigate: true);
            flash("Pilih Lokasi anda terlebih dahulu", "danger");
            $this->dispatch('show-notif');
        }
    }
}