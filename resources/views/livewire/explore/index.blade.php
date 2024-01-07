<div>
  @push('style')
    <link rel="stylesheet" href="{{ asset('css/explore.css') }}">
  @endpush
  <livewire:components.nav />
  <div class="container my-5 pt-5">
    <div class="explore-container py-3 rounded-5">
      <div class="explore-hero row align-items-center">
        <div class="col-12 col-md-5">
          <p class="fw-bold fs-3">{{ $location['name'] }}</p>
          <p class="fw-medium">Temukan apa kebutuhanmu karena kami di sini, Membantu kalian untuk mempermudah semuanya
          </p>
        </div>
      </div>
    </div>
    <div class="container">
      <nav aria-label="breadcrumb" class="my-3">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-secondary" wire:navigate>Home</a></li>
          <li class="breadcrumb-item"><a href="" class="text-secondary" wire:navigate>{{ $location['name'] }}</a>
          </li>
        </ol>
      </nav>

      <div class="category">
        <div class="row">
          <div class="col-md-12">
            <p class="fs-5 fw-medium my-0">Pilih dari kebutuhan</p>
            <p class="">Salah satunya mungkin menjadi kebutuhan Anda.</p>
            <div class="row">
              @foreach ($categories as $category)
                <livewire:explore.category-card :category="$category" />
              @endforeach
            </div>
          </div>
        </div>
      </div>

      <div class="mart mt-5">
        <div class="row">
          <div class="col-md-12">
            <p class="fs-5 fw-medium my-0">Pilih dari Marketnya</p>
            <p class="">Salah satunya mungkin menjadi kebutuhan Anda.</p>
            <div class="row">
              @foreach ($marts as $mart)
                <livewire:explore.mart-card :mart="$mart" />
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
