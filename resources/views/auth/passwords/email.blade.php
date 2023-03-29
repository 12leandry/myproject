@extends('layouts.guest', ['title' => 'Reset Password', 'activeLink' => ''])

@section('content')
    {{-- <div class="container"> --}}
    {{-- <div class="row justify-content-center"> --}}




    <form method="POST" action="{{ route('password.email') }}">
        @csrf
        <div class="card card-login card-hidden">
            <div class="card-header card-header-rose text-center">
                <h4 class="card-title">Reset Password</h4>
            </div>
            <div class="card-body ">
                {{-- <p class="card-description text-center"></p> --}}
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
            </div>

            <div class="card-footer justify-content-center ">

                <div class="row mb-3">
                    <div class="col-4 ">
                    <input type="submit" class="btn btn-rose " value="{{ __('Send Password Reset Link') }}">
                    </div>

                </div>
            </div>
        </div>
    </form>

@endsection
