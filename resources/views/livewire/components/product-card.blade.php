<div class="col-6 col-md-4 mb-3">
  <x-toast />
  <div class="card rounded-5">
    <div class="card-body">
      <div class="row">
        <div class="col-6">
          <p>{{ $product->name }}</p>
          <p class="m-0">{{ $product->description }}</p>
          <p>Rp. {{ $product->price }}</p>
        </div>
        <div class="col-6">
          <img src="{{ asset('storage/' . $product->image) }}" class="img-fluid" alt="...">
        </div>
      </div>
      <div class="d-flex justify-content-end">
        @if ($page == 'market')
          <button wire:click='addToCart' class="btn btn-small btn-success">Tambah</button>
        @elseif ($page == 'category')
          @php
            $market_slug = $product->seller->mart->slug;
          @endphp
          <a href="{{ route('market', ['mart' => "$market_slug"]) }}" wire:navigate>
            <button class="btn btn-small btn-success">Kunjungi</button>
          </a>
        @endif
      </div>
    </div>
  </div>
</div>
