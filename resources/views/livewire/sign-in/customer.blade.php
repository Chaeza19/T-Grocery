<section id="signIn">
  <x-toast />
  <div class="position-fixed" style="margin-top: 5px; margin-left: 5px">
    <a href="{{ route('signIn.index') }}" wire:navigate>
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
        <path d="M20 11H7.83L13.42 5.41L12 4L4 12L12 20L13.41 18.59L7.83 13H20V11Z" fill="#E50914" />
      </svg>
    </a>
  </div>
  <div class="container-fluid h-100">
    <div class="row align-items-center h-100">
      <div class="col-md-7 text-center">
        <form action="" wire:submit='login'>
          <img src="{{ asset('images/Logo-tgrocery.svg') }}" alt="logo" />
          <div class="container-fluid mt-4">
            <div class="row justify-content-center">
              <div class="pilihan">
                <h4>Sign In For Costumer</h4>
                <div class="mb-3">
                  <input type="text" wire:model.live='username'
                    class="form-control @error('username') is-invalid @enderror" id=""
                    placeholder="Username" />
                  <x-input-error modelName="username" />
                </div>
                <div class="mb-3">
                  <input type="password" wire:model.live='password'
                    class="form-control @error('password') is-invalid @enderror" id=""
                    placeholder="Password" />
                  <x-input-error modelName="password" />
                </div>
                <div class="mb-3">
                  <button type="submit" class="btn">LOGIN</button>
                </div>
                <div class="mb-3">
                  <p>
                    Anda Belum Punya Akun? <span><a href="{{ route('signUp.customer') }}"
                        wire:navigate>Register</a></span>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </form>
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
