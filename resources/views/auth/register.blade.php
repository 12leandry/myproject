@extends('layouts.guest', ['title' => 'register', 'activeLink' => 'register'])

@section('content')
    <form class="form" method="POST" action="{{ route('register') }}">
        @csrf
        <div class="card card-login card-hidden">
            <div class="card-header card-header-rose text-center">
                <h4 class="card-title">Register</h4>
            </div>
            <div class="card-body ">
                <p class="card-description text-center">Create an account</p>
                <span class="bmd-form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="material-icons">face</i>
                            </span>
                        </div>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                            value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Name...">

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </span>
                <span class="bmd-form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="material-icons">email</i>
                            </span>
                        </div>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                            value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email...">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </span>
                <span class="bmd-form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="material-icons">lock_outline</i>
                            </span>
                        </div>
                        <input id="password" type="password"
                            class="form-control @error('password') is-invalid @enderror" name="password"
                            required autocomplete="new-password" placeholder="Password...">


                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </span>
                <span class="bmd-form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="material-icons">lock_outline</i>
                            </span>
                        </div>
                        <input id="password-confirm" type="password" class="form-control @error('password-confirm') is-invalid @enderror" name="password_confirmation"
                            required autocomplete="password" placeholder="Confirm password...">

                        @error('password-confirm')
                            <span class="invalid-feedback ml-3" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </span>
            </div>
            <div class="card-footer justify-content-center ">
                <div>
                    <input type="submit" class="btn btn-rose " value="connexion">
                </div>
            </div>
            <div class="mx-auto">
                @if (Route::has('password.request'))
                    <h6 class="text-center text-primary"> Already have an account?
                        <a class="btn btn-link btn-danger " href="{{ route('login') }}">
                            {{ __('Login') }}
                        </a>
                    </h6>
                @endif
            </div>
        </div>
    </form>
@endsection
