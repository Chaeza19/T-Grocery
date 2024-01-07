<div>
  <livewire:components.nav-seller />
  <div class="container-fluid mt-5 pt-5">
    <img src="{{ asset('images/seller_hero.jpg') }}" class="img-fluid" alt="...">
    <div class="container">
      <div class="my-3 d-flex justify-content-end">
        <a href="{{ route('seller.product.create') }}" wire:navigate>
          <button class="btn btn-success btn-sm">Tambah Produk</button>
        </a>
      </div>
      <livewire:seller.home.product-list />
    </div>
  </div>
</div>
