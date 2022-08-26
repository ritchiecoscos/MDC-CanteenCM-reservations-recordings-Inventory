@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('frontend') }}/fonts/material-icon/css/material-design-iconic-font.min.css">
<link rel="stylesheet" href="{{ asset('frontend') }}/css/style.css">

<div class="container">
    <div class="signin-content">
        <div class="signin-image">
            <figure><img src="{{ asset('frontend') }}/images/logo.png" alt="sing up image"></figure>
        </div>
    <div class="row">
        <div class="col-md-11">

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group">

                            <div>
                                <label for="password"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input id="name" type="text" class=" @error('name') is-invalid @enderror" name="name" placeholder="Name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">

                            <div >
                                <label for="email"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input id="email" type="email" class=" @error('email') is-invalid @enderror"  placeholder="Email Address" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">

                            <div >
                                <label for="password"><i class="zmdi zmdi-lock"></i></label>
                                <input id="password" type="password" class=" @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <div >
                                <label for="password-confirm"><i class="zmdi zmdi-lock"></i></label>
                                <input id="password-confirm" type="password"  placeholder="Confirm Password" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-8">
                                <button type="submit" class="btn btn-primary btn-sm">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
