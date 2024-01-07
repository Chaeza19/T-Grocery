<section id="signIn">
  <div class="position-fixed" style="margin-top: 5px; margin-left: 5px">
    <a href="{{ route('seller.index') }}" wire:navigate>
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
        <path d="M20 11H7.83L13.42 5.41L12 4L4 12L12 20L13.41 18.59L7.83 13H20V11Z" fill="#E50914" />
      </svg>
    </a>
  </div>
  <div class="container-fluid h-100">
    <div class="row align-items-center h-100">
      <div class="col-md-7 text-center">
        <form action="" wire:submit='save' enctype="multipart/form-data">
          <img src="{{ asset('images/Logo-tgrocery.svg') }}" alt="logo" />
          <div class="container-fluid mt-4">
            <div class="row justify-content-center">
              <div class="pilihan">
                <h4>TAMBAH PRODUK</h4>
                <div class="mb-3">
                  <input type="text" wire:model.live="form.name"
                    class="form-control @error('form.name') is-invalid @enderror" id="exampleFormControlInput1"
                    placeholder="Nama Produk" />
                  @error('form.name')
                    <div class="invalid-feedback text-start">{{ $message }}</div>
                  @enderror
                </div>
                <div class="mb-3">
                  <input type="text" wire:model.live="form.description"
                    class="form-control @error('form.description') is-invalid @enderror" id="exampleFormControlInput1"
                    placeholder="Deskripsi Produk" />
                  @error('form.description')
                    <div class="invalid-feedback text-start">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
                <div class="mb-3">
                  <input type="number" wire:model.live="form.price"
                    class="form-control @error('form.price') is-invalid @enderror" id="exampleFormControlInput1"
                    placeholder="Harga" />
                  @error('form.price')
                    <div class="invalid-feedback text-start">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
                <div class="mb-3">
                  <select wire:model.live="form.category_id"
                    class="form-select @error('form.category_id') is-invalid @enderror"
                    aria-label="Default select example">
                    <option selected>Kategori</option>
                    @foreach ($categories as $categori)
                      <option value="{{ $categori->id }}">{{ $categori->name }}</option>
                    @endforeach
                  </select>
                  @error('form.category_id')
                    <div class="invalid-feedback text-start">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
                <div class="mb-3">
                  <input type="file" accept="image/*" wire:model="form.image"
                    class="form-control
                    @error('form.image') is-invalid @enderror" id="formFile">
                  @error('form.image')
                    <div class="invalid-feedback text-start">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
                <div class="mb-3">
                  <button type="submit" class="btn">Tambah Produk</button>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
      <div class="col-md-5 bg_signIn p-0">
        <p>
          Kualitas Nomor 1
        </p>
      </div>
    </div>
  </div>
</section>
