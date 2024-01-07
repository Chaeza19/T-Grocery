<div>
  @push('style')
    <link rel="stylesheet" href="{{ asset('css/cart.css') }}">
  @endpush
  <livewire:components.nav />
  <div class="body d-flex">
    <div class="side col-md-3 py-4 d-flex flex-column justify-content-evenly">
      <img src="{{ asset('images/cart-side.png') }}" class="img-fluid px-5" alt="...">
      <p class="text-white text-center fs-4 fw-semibold px-5">Penuhi <br> Kenikmatan <br> Di Setiap <br> Pembelian</p>
    </div>
    <div class="main col-md-9 col-12">
      <p class="fs-4 fw-semibold">Your Order</p>
      <nav aria-label="breadcrumb" class="my-3">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('explore') }}" class="text-secondary" wire:navigate>Kembali</a>
          </li>
          <li class="breadcrumb-item"><a href="" class="text-secondary" wire:navigate>Keranjang</a>
          </li>
        </ol>
      </nav>
      @if (count($sellers) > 0)
        <div class="d-flex justify-content-end">
          <a href="{{ route('explore') }}" wire:navigate>
            <button class="btn btn-outline-success rounded-5 fw-medium">
              Tambah
            </button>
          </a>
        </div>
        @foreach ($sellers as $seller)
          <livewire:customer.cart.cart-seller :sellerId="$seller" wire:key='$seller' />
        @endforeach
      @else
        <div class="d-flex flex-column justify-content-center align-items-center py-5">
          <div class="col-md-4 col-6">
            <img src="{{ asset('images/loading.png') }}" class="img-fluid" alt="...">
          </div>
          <div class="col-md-6 col-12">
            <p class="text-secondary text-center">Keranjang Kamu kosong. Mari temukan dulu Barang yang kamu inginkan</p>
          </div>
          <a href="{{ route('explore') }}" wire:navigate>
            <button class="btn btn-outline-success px-5 rounded-5">Cari</button>
          </a>
        </div>
      @endif

      {{-- empty card --}}
      {{-- <div class="d-flex flex-column justify-content-center align-items-center py-5">
        <div class="col-md-4 col-6">
          <img src="{{ asset('images/loading.png') }}" class="img-fluid" alt="...">
        </div>
        <div class="col-md-6 col-12">
          <p class="text-secondary text-center">Keranjang Kamu kosong. Mari temukan dulu Barang yang kamu inginkan</p>
        </div>
        <a href="{{ route('explore') }}" wire:navigate>
          <button class="btn btn-outline-success px-5 rounded-5">Cari</button>
        </a>
      </div> --}}
    </div>
  </div>
</div>
