@push('style')
    <link rel="stylesheet" href="{{ asset('css/payment.css') }}">
@endpush

<div>
  {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
  <x-nav></x-nav>

  <section id="paymentQRIS">
    <div class="container h-100">
      <div class="row h-100 align-content-center">
        <div class="col-12 text-center">
          <div class="card_paymentQRIS">
            <h5>Silahkan Scan untuk melakukan pembayaran</h5>
            <img src="{{ asset('images/QRIS_Scan.svg') }}" alt="img" />
            <div class="d-flex justify-content-end">
              <button class="btn btn-danger rounded-3">Kembali</button>
              <button class="btn rounded-3">Done</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
