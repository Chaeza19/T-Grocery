<div>
  <livewire:components.nav />
  <div class="container mt-5 pt-5">
    <img src="{{ asset('storage/mart/wide-' . $mart->name . '.png') }}" class="img-fluid" alt="...">

    <nav aria-label="breadcrumb" class="my-3">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-secondary" wire:navigate>Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('explore') }}" class="text-secondary"
            wire:navigate>{{ $location['name'] }}</a></li>
        <li class="breadcrumb-item"><a href="" class="text-secondary" wire:navigate>{{ $mart->name }}</a></li>
      </ol>
    </nav>

    <div class="category">
      <div class="row">
        <div class="col-md-12">
          <p class="fs-5 fw-medium my-0">{{ $mart->name }}</p>
          <div class="d-flex gap-2 align-items-center">
            <button class="btn btn-success btn-sm">Jam Buka</button>
            <p class="text-secondary m-0">07.00 - 18.00 WIB</p>
          </div>
          <livewire:components.product-list groupBy="mart" :groupId="$mart->id" page="market"/>
        </div>
      </div>
    </div>
  </div>
</div>
