<div class="cart-seller py-5">
  <p class="m-0 fs-6 fw-bold">{{ $carts[0]->product->seller->name }}</p>
  @foreach ($carts as $cart)
    <livewire:customer.cart.product-item :cart="$cart" wire:key="{{ $cart->id }}" />
  @endforeach
  <hr class="text-success">
  <div class="d-flex justify-content-between">
    <p class="m-0 fs-6 fw-semibold">Total Harga</p>
    <p class="m-0 fs-6 fw-semibold">Rp. {{ $total }}</p>
  </div>
  <button class="btn btn-success rounded-5 w-100 mt-2">Pesan</button>
</div>
