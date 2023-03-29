@extends('layouts.guest', ['title' => 'login', 'activeLink' => 'login'])

@section('content')
    <form class="form" method="POST" action="{{ route('login') }}">
        @csrf
        <div class="card card-login card-hidden">
            <div class="card-header card-header-rose text-center">
                <h4 class="card-title">{{ __('Login') }}</h4>
            </div>
            <div class="card-body ">
                <p class="card-description text-center">Sign In to your account</p>
                <span class="bmd-form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="material-icons">email</i>
                            </span>
                        </div>
                        <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email"
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
                        <input type="password" id="password" class="form-control @error('password') is-invalid  @enderror" name="password"
                            required autocomplete="current-password" placeholder="Password...">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </span>
                <span class="bmd-form-group ">
                    <div class="input-group ">
                        <div class="row ml-5 ">
                            <div class="form mt-4">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                    {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label " for="remember">
                                    Remember Me
                                </label>
                            </div>
                        </div>
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
                    <a class="btn btn-link btn-danger " href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
            </div>
        </div>
    </form>
@endsection
