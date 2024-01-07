<div class="row my-3">
  @foreach ($products as $product)
    <livewire:components.product-card :product="$product" :key="$product->id" :page="$page" />
  @endforeach
</div>
