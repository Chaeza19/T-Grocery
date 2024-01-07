@extends('layouts.main')

@push('style')
  <link rel="stylesheet" href="{{ asset('css/order.css') }}">
@endpush

<div>
  {{-- Stop trying to control. --}}
  <x-nav></x-nav>
  <section id="show_order">
    <div class="container-fluid">
      <div class="row mb-3">
        <div class="col-12 p-0 justify-content-center d-flex">
          <div class="card_order">
            <div class="container text-white">
              <!-- Sub_judul Pesanan -->
              <div class="row">
                <div class="col-12 mb-3">
                  <h6>T - Mart Putri</h6>
                </div>
              </div>

              <!-- Rincian Proses Pesanan -->
              <div class="row text-center pb-3 border-2 border-bottom">
                <div class="col-md-3 img_rincian position-relative">
                  <img src="{{ asset('images/showOrder/waitingTime.png') }}" alt="img" height="100px" />
                  <p>Menunggu Pihak Mart Menyetujui</p>

                  <!-- gambar next -->
                  <div class="logo_next">
                    <img src="{{ asset('images/showOrder/next.png') }}" alt="img" />
                  </div>
                </div>
                <div class="col-md-3 img_rincian position-relative">
                  <img src="{{ asset('images/showOrder/orderApproved.png') }}" alt="img" height="100px" />
                  <p>Pesanan Telah Disetujui Silahkan Pilih Metode Pembayaran</p>
                  <button class="btn btn-light text-danger fw-bold rounded-5">Lanjutkan</button>

                  <!-- gambar next -->
                  <div class="logo_next">
                    <img src="{{ asset('images/showOrder/next.png') }}" alt="img" />
                  </div>
                </div>
                <div class="col-md-3 img_rincian position-relative">
                  <img src="{{ asset('images/showOrder/processOrders.png') }}" alt="img" height="100px" />
                  <p>Menunggu Konfirmasi Pihak Mart</p>
                  <button class="btn btn-light text-danger fw-bold rounded-5">Eksplore Lagi</button>

                  <!-- gambar next -->
                  <div class="logo_next">
                    <img src="{{ asset('images/showOrder/next.png') }}" alt="img" />
                  </div>
                </div>
                <div class="col-md-3 img_rincian">
                  <img src="{{ asset('images/showOrder/orderSucces.png') }}" alt="img" height="100px" />
                  <p>Pesanan Telah Sampai Terimakasih</p>
                  <button class="btn btn-light text-danger fw-bold rounded-5">Selesaikan</button>
                </div>
              </div>

              <!-- Rincian Pesanan -->
              <div class="row mt-3">
                <div class="col-12">
                  <p>Rincian Pesanan</p>
                </div>
                <div class="col-12 p-0">
                  <table class="table">
                    <tbody>
                      <tr>
                        <td class="col-md-10 col-7 ps-5">1 x Nama Barang barang barang </td>
                        <td class="col-md-2 col-5">Rp . 20.000</td>
                      </tr>

                      <!-- Total Pesanan -->
                      <tr class="border-2 border-top">
                        <td class="col-md-10 col-7  ps-5">Jumlah yang harus di bayar</td>
                        <td class="col-md-2 col-5 ">Rp . 400.000</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>

              <!-- tombol Back -->
              <div class="row">
                <div class="col-12 text-end">
                  <button class="btn btn-light rounded-5 text-danger fw-bold">kembali</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
