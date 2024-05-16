@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">{{ __('Masuk') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="input-group has-validation mb-3">
                            <div class="form-floating @error('email') is-invalid @enderror">
                                <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" id="inputEmailUsername" value="{{ old('email') }}" placeholder="Username" autocomplete="email" required autofocus>
                                <label for="inputEmailUsername">{{ __('Email atau Username')}}</label>
                            </div>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="input-group has-validation mb-3">
                            <div class="form-floating @error('password') is-invalid @enderror">
                                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="inputPassword" value="{{ old('password') }}" placeholder="Username" autocomplete="password" required>
                                <label for="inputPassword">{{ __('Password')}}</label>
                            </div>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" name="remember" id="defaultCheck1" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="defaultCheck1">
                              {{ __('Ingat saya!') }}
                            </label>
                        </div>

                        <div class="row mb-0 justify-content-center">
                            <div class="col-md-10">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Masuk') }}
                                </button>
                            </div>
                            {{--
                            <div class="col-md-8 offset-md-4">

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                            --}}
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
