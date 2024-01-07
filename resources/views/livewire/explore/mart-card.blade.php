<div class="col-6 col-md-2">
  <a class="produk_items" href="{{ route('market', ['mart' => $mart->slug]) }}" wire:navigate>
    <div class="circle-container">
      <img class="circle-image" src="{{ asset('storage/mart/' . $mart->name . '.png') }}" alt="img" />
    </div>
    <p class="text-uppercase mt-3">{{ $mart->name }}</p>
  </a>
</div>
