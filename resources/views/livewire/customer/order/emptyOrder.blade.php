@extends('layouts.main')

@push('style')
  <link rel="stylesheet" href="{{ asset('css/order.css') }}">
@endpush

<div>
  {{-- Stop trying to control. --}}
  <x-nav></x-nav>
  <section id="emptyOrder">
    <div class="container h-100">
      <div class="row h-100 align-content-center">
        <div class="col-12 text-center">
          <img src="{{ asset('images/emptyOrder.png') }}" alt="img" height="150px" />
          <p>
            Orderan Kamu kosong. Mari temukan dulu <br />
            Barang yang kamu inginkan
          </p>
          <button class="btn btn-outline-success rounded-5 px-5">Cari</button>
        </div>
      </div>
    </div>
  </section>
</div>
