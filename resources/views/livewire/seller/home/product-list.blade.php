<div class="row">
  <x-toast />
  @foreach ($products as $product)
    <livewire:seller.home.product-card :product="$product" wire:key="{{ $product->id }}" />
  @endforeach
</div>
