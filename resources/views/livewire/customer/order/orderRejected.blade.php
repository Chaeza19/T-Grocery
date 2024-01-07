@extends('layouts.main')

@push('style')
  <link rel="stylesheet" href="{{ asset('css/order.css') }}">
@endpush

<div>
  {{-- Stop trying to control. --}}
  <x-nav></x-nav>
  <section id="orderRejected">
    <div class="container h-100">
      <div class="row h-100 align-content-center">
        <div class="col-12 text-center">
          <div class="card_orderRejected d-flex align-items-center text-white justify-content-center">
            <img class="me-5" src="{{ asset('images/orderRejected.png') }}" alt="img" height="150px" />
            <div>
              <h2>MAAF PESANAN ANDA DI TOLAK!</h2>
              <a href="">
                <button class="btn btn-light text-danger px-5 rounded-5">Coba Pesan Kembali</button>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
