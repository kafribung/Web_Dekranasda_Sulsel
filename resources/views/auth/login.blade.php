@extends('auth.master_auth')
@section('title')
@section('content')
<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <div class="login100-form-title" style="background-image: url( {{asset('log/images/bg-01.jpg')}} );">
                <span class="login100-form-title-1">
                    Login Admin Dekranasda Sulsel
                </span>
            </div>

            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <p class="alert alert-danger">{{$error}}</p>
                @endforeach   
            @endif

            <form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
                @csrf

                <div class="wrap-input100 validate-input m-b-26">
                    <span class="label-input100">Email</span>
                    <input class="input100" type="text"  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="off" autofocus placeholder="Enter username">
                    <span class="focus-input100"></span>

                </div>

                <div class="wrap-input100 validate-input m-b-18">
                    <span class="label-input100">Password</span>
                    <input class="input100" type="password" @error('password') is-invalid @enderror" name="password"  autocomplete="current-password" placeholder="Enter password">
                    <span class="focus-input100"></span>

                </div>

                <div class="flex-sb-m w-full p-b-30">
                    <div class="contact100-form-checkbox">
                        <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="label-checkbox100" for="ckb1">
                            Remember me
                        </label>
                    </div>

                    <div>

                        @if (Route::has('password.request'))
                                <a class="txt1" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                        @endif
                    </div>
                </div>

                <div class="container-login100-form-btn">
                    <button type="submit" class="login100-form-btn">
                        {{ __('Login') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
    
@endsection