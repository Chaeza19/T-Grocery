<div>
  <livewire:components.nav-seller />
  <div class="container mt-5 pt-5 d-flex justify-content-center">
    <div class="box px-4 py-3 w-75 rounded-5" style="background: #AF1717">
      <form action="" wire:submit='update' enctype="multipart/form-data">
        <div class="bg-white w-25 mx-auto rounded-4 p-3">
          <img src="{{ asset('storage/' . $product->image) }}" class="img-fluid" alt="Gambar Produk">
        </div>
        <div class="mb-2">
          <label for="productName" class="form-label text-white px-3">Nama Produk</label>
          <input type="text" wire:model.live="form.name"
            class="form-control rounded-pill @error('form.name') is-invalid @enderror" id="productName"
            placeholder="Nama Produk">
          @error('form.name')
            <div class="invalid-feedback text-start">{{ $message }}</div>
          @enderror
        </div>
        <div class="mb-2">
          <label for="productDescription" class="form-label text-white px-3">Deskripsi Produk</label>
          <input type="text" wire:model.live="form.description"
            class="form-control rounded-pill @error('form.description') is-invalid @enderror" id="productDescription"
            placeholder="Deskripsi Produk">
          @error('form.description')
            <div class="invalid-feedback text-start">{{ $message }}</div>
          @enderror
        </div>
        <div class="mb-2">
          <label for="productHarga" class="form-label text-white px-3">Harga</label>
          <input type="number" wire:model.live="form.price"
            class="form-control rounded-pill @error('form.price') is-invalid @enderror" id="productHarga"
            placeholder="Harga">
          @error('form.price')
            <div class="invalid-feedback text-start">{{ $message }}</div>
          @enderror
        </div>
        <div class="mb-2">
          <label for="categori" class="form-label text-white px-3">Kategori</label>
          <select wire:model.live="form.category_id"
            class="form-select rounded-pill @error('form.category_id') is-invalid @enderror" id="categori"
            aria-label="Default select example">
            <option selected>Kategori</option>
            @foreach ($categories as $category)
              <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
          </select>
          @error('form.category_id')
            <div class="invalid-feedback text-start">{{ $message }}</div>
          @enderror
        </div>
        <div class="mb-2">
          <label for="image" class="form-label text-white px-3">Kategori</label>
          <input wire:model.live="form.image" accept="image/*"
            class="form-control rounded-pill @error('form.image') is-invalid @enderror" type="file" id="image">
          @error('form.image')
            <div class="invalid-feedback text-start">{{ $message }}</div>
          @enderror
        </div>
        <div class="d-flex gap-3 justify-content-center">
          <a href="{{ route('seller.index') }}" wire:navigate>
            <button class="btn btn-danger px-5 rounded-pill">Batal</button>
          </a>
          <button type="submit" class="btn btn-success px-5 rounded-pill">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>
