<section id="signIn">
  <div class="position-fixed" style="margin-top: 5px; margin-left: 5px">
    <a href="{{ route('signIn.customer') }}" wire:navigate>
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
        <path d="M20 11H7.83L13.42 5.41L12 4L4 12L12 20L13.41 18.59L7.83 13H20V11Z" fill="#E50914" />
      </svg>
    </a>
  </div>
  <div class="container-fluid h-100">
    <div class="row align-items-center h-100">
      <div class="col-md-7 text-center">
        <form action="" wire:submit='register'>
          <img src="{{ asset('images/Logo-tgrocery.svg') }}" alt="logo" />
          <div class="container-fluid mt-4">
            <div class="row justify-content-center">
              <div class="pilihan">
                <h4>Sign Up For Costumer</h4>
                <div class="mb-3">
                  <input type="text" wire:model.live="name" class="form-control @error('name') is-invalid @enderror"
                    id="" placeholder="Nama" />
                  <x-input-error modelName="name" />
                </div>
                <div class="mb-3">
                  <input type="text" wire:model.live='username'
                    class="form-control @error('username') is-invalid @enderror" id=""
                    placeholder="Username" />
                  <x-input-error modelName="username" />
                </div>
                <div class="mb-3">
                  <input type="email" wire:model.live='email'
                    class="form-control @error('email') is-invalid @enderror" id="" placeholder="Email" />
                  <x-input-error modelName="email" />
                </div>
                <div class="mb-3">
                  <input type="password" wire:model.live='password'
                    class="form-control @error('password') is-invalid @enderror" id=""
                    placeholder="Password" />
                  <x-input-error modelName="password" />
                </div>
                <div class="mb-3">
                  <input type="password" wire:model.live='password_confirmation'
                    class="form-control @error('password_confirmation') is-invalid @enderror" id=""
                    placeholder="Comfirm Password" />
                  <x-input-error modelName="password_confirmation" />
                </div>
                <div class="mb-3">
                  <button type="submit" class="btn">Register</button>
                </div>
                <div class="mb-3">
                  <p>
                    Sudah Punya Akun? <span><a href="{{ route('signIn.customer') }}" wire:navigate>Login</a></span>
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
