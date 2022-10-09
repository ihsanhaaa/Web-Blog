@extends('layouts.app')

@section('content')
    <div class="light b-t">
        <div id="primary" class="content-area" data-bg-possition="center" data-bg-repeat="false"
            style="background: url('../../img/icon/icon-circles.png');">
            <main id="main" class="site-main">
                <div class="container">
                    <div class="col-xl-8 mx-lg-auto p-t-b-80">
                        <header class="text-center">
                            <h1>Welcome Back</h1>
                            <p class="section-subtitle">Hey Soldier welcome back signin now there is lot of new stuff
                                waiting
                                for you</p>
                            <img class="p-t-b-50" src="{{ asset('img/icon/icon-login.png') }}" alt="">
                        </header>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group has-icon"><i class="icon-envelope-o"></i>
                                        <input id="email" type="email"
                                            class="form-control form-control-lg @error('email') is-invalid @enderror"
                                            placeholder="Email Address" name="email" value="{{ old('email') }}" required
                                            autocomplete="email" autofocus>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group has-icon"><i class="icon-user-secret"></i>
                                        <input id="password" type="password"
                                            class="form-control form-control-lg @error('password') is-invalid @enderror"
                                            placeholder="Password" name="password" required autocomplete="current-password">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-12 mb-3">
                                    {!! NoCaptcha::display() !!}
                                    {!! NoCaptcha::renderJs() !!}
                                    @error('g-recaptcha-response')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-lg-6">
                                    <div class="col-md-6" style="padding-bottom: 10px">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                                {{ old('remember') ? 'checked' : '' }}>{{ __('Remember Me') }}
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                                        {{ __('Login') }}
                                    </button>
                                    <p class="forget-pass">Lupa password anda? <a
                                            href="/password/reset">Klik disini</a> </p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </main>
            <!-- #main -->
        </div>
        <!-- #primary -->
    </div>
@endsection
