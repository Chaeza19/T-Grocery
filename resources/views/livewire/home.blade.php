<div>
  <x-toast />
  <livewire:components.nav />
  <section id="content">
    <div class="container-fluid h-100">
      <div class="row h-100 align-content-center">
        <div class="col-12 position-relative">
          <div class="bg_welcome">
            <img src="{{ asset('images/bg1.png') }}" alt="img" />
          </div>
          <div class="sub_judul text-center">
            <h5>
              BUTUH SESUATU? <br />
              PESAN DISINI AJA!
            </h5>
            <p>Kami memberi Anda resto yang tak terhitung jumlahnya untuk dicoba. Dan pastikan kami membuat Anda merasa
              puas.</p>
          </div>
          <form wire:submit='exploreLocation' action="">
            <div class="card_location">
              <p class="text-start">Lokasi Anda</p>
              <select wire:model='slug' class="form-select rounded-5" aria-label="Default select example">
                <option selected>Enter Your Location</option>
                @foreach ($locations as $location)
                  <option value="{{ $location->slug }}" wire:key="{{ $location->id }}">{{ $location->name }}</option>
                @endforeach
              </select>
              <button type="submit" class="btn w-100 rounded-5 mt-3">EXPLORE</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
</div>
