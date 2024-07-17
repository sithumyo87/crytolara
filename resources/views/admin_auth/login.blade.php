@extends('layouts.admin_auth')

@section('content')
<div class="auth-form">
    <h2 class="text-center mb-4">Sign In</h2>
    <form method="POST" action="{{ route('admin.login') }}">
        @csrf
        <p>For Adminstrator</p>
        <div class="form-floating mb-3">
            <input type="email" class="form-control @error('email') is-invalid @enderror" id="floatingInput" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            <label for="floatingInput">Email</label>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-floating mb-2">
            <input type="password" class="form-control @error('password') is-invalid @enderror" id="Password" name="password" required autocomplete="current-password">
            <label for="Password">Password</label>
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div
            class="d-flex justify-content-between  align-items-center flex-wrap gap-2">
            <div class="form-group mb-0">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label class="form-check-label" for="Remember">Remember Me?</label>
                </div>
            </div>
            <div class="form-group mb-0">
                @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
            </div>
        </div>
        <div class="text-center mt-3">
            <button type="submit" class="btn btn-primary">Sign In</button>
        </div>
        {{-- <div class="text-center mt-3">
            <p>or sign in with others account?</p>
        </div> --}}
        {{-- <div class="d-flex justify-content-center ">
            <ul class="list-group list-group-horizontal   list-group-flush">
                <li class="list-group-item bg-transparent border-0">
                    <a href="#"><img src="../assets/images/brands/01.png"
                            class="img-fluid avatar avatar-30 avatar-rounded"
                            alt="img60"></a>
                </li>
                <li class="list-group-item bg-transparent border-0">
                    <a href="#"><img src="../assets/images/brands/02.png"
                            class="img-fluid avatar avatar-30 avatar-rounded"
                            alt="gm"></a>
                </li>
                <li class="list-group-item bg-transparent border-0">
                    <a href="#"><img src="../assets/images/brands/03.png"
                            class="img-fluid avatar avatar-30 avatar-rounded"
                            alt="im"></a>
                </li>
                <li class="list-group-item bg-transparent border-0">
                    <a href="#"><img src="../assets/images/brands/04.png"
                            class="img-fluid avatar avatar-30 avatar-rounded"
                            alt="li"></a>
                </li>
            </ul>
        </div> --}}
    </form>
    {{-- <div class="new-account mt-3 text-center">
        <p>Don't have an account? <a class="" href="sign-up.html">Click
                here to sign up</a></p>
    </div> --}}
</div>
@endsection
