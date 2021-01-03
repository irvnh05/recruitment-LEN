@extends('layouts.auth')

@section('content')
<div class="container">
    <div>
        {{-- <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a> --}}

        <div class="login_wrapper">
            {{-- <div class="animate form login_form"> --}}
            <div class="animate">
                <section class="login_content">
                        <form method="POST" action="{{ route('login') }}" class="mt-3">
                        @csrf
                        <h1>Masuk</h1>
                        <div>
                            <input id="email" type="text" class="form-control" placeholder="Username" required="" class="form-control w-75 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus />
                             @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div>
                            <input id="password" type="password" class="form-control" placeholder="Password" required=""  class="form-control w-75 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"/>
                       @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div>
                        <button
                            type="submit"
                            class="btn btn-default submit"
                        >
                            Sign In
                        </button>
                            {{-- <a class="reset_pass" href="#">Lost your password?</a> --}}
                        </div>

                        <div class="clearfix"></div>

                        <div class="separator">
                            <p class="change_link">New to site?
                                <a href="{{ route('register') }}" class="to_register"> Create Account </a>
                            </p>

                            <div class="clearfix"></div>
                            <br />

                            <div>
                                <img src="landing/assets/images/LogoLen.svg" width="90" height="100"
                                    class="d-inline-block align-top" alt="">
                                <p>© 2020 PT.Len • All rights reserved</p>
                            </div>
                        </div>
                    </form>
                     <img src="landing/assets/images/masuk.png" class="image_masuk">
                </section>
                {{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}
            </div>

            <div class="card-body">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="form-group row">
                        <label for="email"
                            class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                        <div class="col-md-6">
                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password" required
                                autocomplete="current-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-6 offset-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                    {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Login') }}
                            </button>

                            @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div> --}}
@endsection
