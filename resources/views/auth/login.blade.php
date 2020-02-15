@extends('layouts.auth')

@section('box')
<form class="form-horizontal form-material" id="loginform" method="POST" action="{{ route('login') }}" style="background:#fff;border-radius:6px;box-shadow: 1px 1px;">

    @csrf
    <img src="{{ asset('public/images').'/logo.png' }}" width="150px" style="padding:15px" >
    <div class="form-group">
        <div class="col-md-4 m-t-20 p-10">
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email" autofocus style="width:100%;border-radius:6px;">
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-4 p-10">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="current-password" style="width:100%;border-radius:6px;margin-top:-60px;">

            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>



    <div class="form-group">
        <div class="col-xs-12 p-10">
            <button type="submit" class="btn btn-success btn-lg btn-block text-uppercase waves-effect waves-light" style="width:100%;border-radius:4px;text-transform:uppercase">
                {{ __('Login') }}
            </button>

            <!-- @if (Route::has('password.request'))
            <a class="btn btn-link" href="{{ route('password.request') }}">
                {{ __('Forgot Your Password?') }}
            </a>
            @endif -->
        </div>
    </div>
</form>

@endsection