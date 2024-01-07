<div class="product-list">
  <div class="row justify-content-between align-items-center my-2">
    <div class="col-5 col-md-5">
      <p class="m-0 fw-medium">{{ $cart->product->name }}</p>
      <p class="m-0 text-success fw-medium">{{ $cart->description }}</p>
    </div>
    <div class="col-3 col-md-4 row align-items-center">
      <button class="col-2 btn btn-outline-success rounded-5 d-flex justify-content-center">-</button>
      <p class="col-3 m-0 text-secondary text-center px-1">{{ $cart->amount }}</p>
      <button class="col-2 btn btn-outline-success rounded-5 d-flex justify-content-center">+</button>
    </div>
    <p class="col-4 col-md-3 m-0 text-secondary text-end">Rp. {{ $cart->amount * $cart->product->price }}
    </p>
  </div>
</div>
