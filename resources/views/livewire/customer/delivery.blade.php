@push('style')
  <link rel="stylesheet" href="{{ asset('css/delivery.css') }}">
@endpush

<div>
  {{-- The whole world belongs to you. --}}
  <livewire:components.nav-seller />
  <section id="delivery">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="card_delivery">
            <div class="sub_judul">
              <img src="{{ asset('images/derivery.svg') }}" alt="img" />
              <p>pengantaran</p>
            </div>
            <div class="container-fluid">
              <div class="row input_location">
                <div class="col-md-7">
                  <p>Detil alamat</p>
                  <p>Asrama Putra Gedung A</p>
                </div>
                <div class="col-md-5">
                  <p>Detil lokasi (opsional)</p>
                  <input type="text" placeholder="Nomor Kamar/Patokan" />
                </div>
              </div>
            </div>
            <div class="container-fluid mt-5">
              <div class="row">
                <div class="col-12 catatan_pengantar">
                  <p>Catatan Pengantaran</p>
                  <textarea name="" id="" cols="30" rows="10"
                    placeholder="Cth: Taruh di tempat penempatan barang"></textarea>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="card_order">
            <div class="sub_judul">
              <img src="{{ asset('images/youOrder.svg') }}" alt="img" />
              <p>Pesanan Kamu</p>
            </div>
            <div class="container">
              <div class="row">
                <div class="col-12">
                  <table class="table">
                    <tbody>
                      <tr>
                        <td class="col-md-7 col-12 pb-4">Menu 1 dengan macam - macam</td>
                        <td class="col-md-3">1</td>
                        <td class="col-md-2">20.000</td>
                      </tr>
                      <tr>
                        <td class="col-md-7 col-12 pb-4">Menu 1 dengan macam - macam</td>
                        <td class="col-md-3">1</td>
                        <td class="col-md-2">20.000</td>
                      </tr>
                      <tr>
                        <td class="col-md-7 col-12 pb-4">Menu 1 dengan macam - macam</td>
                        <td class="col-md-3">1</td>
                        <td class="col-md-2">20.000</td>
                      </tr>

                      <!-- Total -->
                      <tr>
                        <th class="pt-5" colspan="2">Ringkasan Pembayaran</th>
                        <td class="pt-5 fw-bold">80.000.000</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="col-12">
                  <div class="card_addProduct justify-content-between">
                    <div>
                      <p>Ada lagi pesanannya?</p>
                      <p>Masih bisa nambah menu lainnya, ya.</p>
                    </div>
                    <button class="btn btn-outline-success rounded-5 px-4">Tambah</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="card_settingOrder">
            <div class="sub_judul">
              <img src="{{ asset('images/selectDelivery.svg') }}" alt="img" />
              <p>Pilih Pengantaran</p>
            </div>
            <div class="container-fluid">
              <div class="row">
                <div class="col-6">
                  <a href="">
                    <div class="card_logo text-center">
                      <img src="{{ asset('images/Pick-Up.svg') }}" alt="img" />
                      <p>Pick -Up</p>
                    </div>
                  </a>
                </div>
                <div class="col-6">
                  <a href="">
                    <div class="card_logo text-center">
                      <img src="{{ asset('images/deliveryLogo.svg') }}" alt="img" />
                      <p>Delivery</p>
                    </div>
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
