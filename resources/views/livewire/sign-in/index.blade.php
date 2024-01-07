<section id="signIn">
  <x-toast />
  <div class="position-fixed" style="margin-top: 5px; margin-left: 5px">
    <a href="{{ route('home') }}" wire:navigate>
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
        <path d="M20 11H7.83L13.42 5.41L12 4L4 12L12 20L13.41 18.59L7.83 13H20V11Z" fill="#E50914" />
      </svg>
    </a>
  </div>
  <div class="container-fluid h-100">
    <div class="row align-items-center h-100">
      <div class="col-md-7 text-center">
        <img src="images/Logo-tgrocery.svg" alt="logo" />
        <div class="container-fluid mt-4">
          <div class="row justify-content-center">
            <div class="pilihan">
              <a href="{{ route('signIn.customer') }}">
                <div class="card_signIn">
                  <img src="images/image 25.svg" alt="img" />
                  <div class="txt_signIn">
                    <p>For Costumer</p>
                    <p>Pembeli</p>
                  </div>
                </div>
              </a>
              <a href="{{ route('signIn.seller') }}">
                <div class="card_signIn mt-4 ps-3">
                  <img src="images/image 26.svg" alt="img" />
                  <div class="txt_signIn">
                    <p>For Owner</p>
                    <p>Penjual</p>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-5 bg_signIn p-0">
        <p>
          Harga Pas <br />
          Belanja puas!
        </p>
        <!-- <img src="images/bg3.png" alt="img" /> -->
      </div>
    </div>
  </div>
</section>
