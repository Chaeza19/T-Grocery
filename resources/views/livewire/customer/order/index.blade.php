@push('style')
  <link rel="stylesheet" href="{{ asset('css/order.css') }}">
@endpush

<div>
  <livewire:components.nav />
  <section id="order">
    <div class="container-fluid">
      <div class="row sub_judul mb-2">
        <div class="col-12 d-flex align-items-center">
          <h5 class="me-3 mb-0">ORDERAN KAMU</h5>
          <a href="">Home</a>
        </div>
      </div>

      <!-- Lakukan perulangan disini -->
      <div class="row mb-3">
        <div class="col-12 justify-content-center d-flex">
          <div class="card_order">
            <div class="container-fluid">
              <div class="row align-items-center">
                <div class="col-2 text-center">
                  <h5>T - Mart Putri</h5>
                  <img src="{{ asset('images/mart.svg') }}" alt="img" />
                </div>
                <div class="col-7 nameProduct">
                  <p>1 x Nama Barang</p>
                  <p>1 x Nama Barang</p>
                </div>
                <div class="col-3 nameProduct">
                  <p>Rp . 20.000</p>
                  <p>Rp . 20.000</p>
                </div>
              </div>
              <div class="row">
                <div class="col-7"></div>
                <div class="col-5 text-center ps-0">
                  <a href="">
                    <button class="btn btn-light rounded-5 px-4">LIHAT PESANAN</button>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row mb-3">
        <div class="col-12 justify-content-center d-flex">
          <div class="card_order">
            <div class="container-fluid">
              <div class="row align-items-center">
                <div class="col-2 text-center">
                  <h5>T - Mart Putri</h5>
                  <img src="{{ asset('images/mart.svg') }}" alt="img" />
                </div>
                <div class="col-7 nameProduct">
                  <p>1 x Nama Barang</p>
                  <p>1 x Nama Barang</p>
                  <p>1 x Nama Barang</p>
                  <p>1 x Nama Barang</p>
                  <p>1 x Nama Barang</p>
                  <p>1 x Nama Barang</p>
                  <p>1 x Nama Barang</p>
                </div>
                <div class="col-3 nameProduct">
                  <p>Rp . 20.000</p>
                  <p>Rp . 20.000</p>
                  <p>Rp . 20.000</p>
                  <p>Rp . 20.000</p>
                  <p>Rp . 20.000</p>
                  <p>Rp . 20.000</p>
                  <p>Rp . 20.000</p>
                </div>
              </div>
              <div class="row">
                <div class="col-7"></div>
                <div class="col-5 text-center ps-0">
                  <a href="">
                    <button class="btn btn-light rounded-5 px-4">LIHAT PESANAN</button>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
