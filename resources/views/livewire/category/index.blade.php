<div>
  <livewire:components.nav />
  <div class="container mt-5 pt-5">
    <div class="bg-danger rounded-5 d-flex justify-content-center align-items-center" style="height: 30vh">
      <p class="fs-1 text-white fw-bold text-uppercase m-0">{{ $category->name }}</p>
    </div>

    <nav aria-label="breadcrumb" class="my-3">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-secondary" wire:navigate>Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('explore') }}" class="text-secondary"
            wire:navigate>{{ $location['name'] }}</a></li>
        <li class="breadcrumb-item"><a href="" class="text-secondary" wire:navigate>{{ $category->name }}</a>
        </li>
      </ol>
    </nav>

    <livewire:components.product-list groupBy="category" :groupId="$category->id" page="category"/>
  </div>
</div>
