<div class="col-6 col-md-2">
  <a class="produk_items" href="{{ route('category', ['category' => $category->slug]) }}" wire:navigate>
    <div class="circle-container">
      <img class="circle-image" src="{{ asset('storage/product_category/' . $category->name . '.png') }}" alt="img" />
    </div>
    <p class="mt-3">{{ $category->name }}</p>
  </a>
</div>
