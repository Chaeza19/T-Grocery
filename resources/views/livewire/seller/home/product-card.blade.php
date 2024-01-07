<div class="col-12 col-md-4 pb-2">
  <div class="card p-3">
    <div class="row">
      <div class="col-6">
        <h6>{{ $product->name }}</h6>
        <p class="my-0">{{ $product->decription }}</p>
        <p class="my-0">{{ $product->category->name }}</p>
        <p class="my-0">Rp. {{ $product->price }}</p>
      </div>
      <div class="col-6">
        <img src="{{ $product->image ? asset('storage/' . $product->image) : '' }}" class="img-fluid" alt="...">
      </div>
    </div>
    <div class="d-flex justify-content-end gap-2 mt-1">
      {{-- <button wire:click='delete' class="btn btn-danger">Hapus</button> --}}
      <button class="btn btn-danger" data-bs-toggle="modal"
        data-bs-target="#deleteModal{{ $product->id }}">Hapus</button>
      <a href="{{ route('seller.product.edit', ['product' => $product->id]) }}" wire:navigate>
        <button class="btn btn-danger">Edit</button>
      </a>
    </div>
  </div>
  {{-- modal --}}
  <div wire:ignore.self class="modal fade" id="deleteModal{{ $product->id }}" tabindex="-1"
    aria-labelledby="deleteModal{{ $product->id }}Label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="deleteModal{{ $product->id }}Label">Konfimasi Hapus</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Yakin ingin menghapus {{ $product->name }} ?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" wire:click='delete' class="btn btn-danger">Hapus</button>
        </div>
      </div>
    </div>
  </div>
</div>
