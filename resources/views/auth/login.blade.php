@extends('layouts.base')

@section('pageTitle')
    <h2>{{ __('Login') }}</h2>
@endsection

@section('content')
    <div class="form-container">
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-group">
                <label for="email">{{ __('Email Address') }}</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email"
                    autofocus placeholder="Enter your email">
                @error('email')
                    <span class="error-label">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="password">{{ __('Password') }}</label>
                <input id="password" type="password" name="password" required autocomplete="current-password"
                    placeholder="Enter your password">
                @error('password')
                    <span class="error-label">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group-checkbox">
                <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label for="remember">{{ __('Remember Me') }}</label>
            </div>

            <button type="submit" class="lol-accept-btn">
                {{ __('Login') }}
            </button>

            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}"
                    style="display: inline-block; margin-top: 10px; clip-path: none; padding: 10px 20px; font-size: 0.9rem;">
                    {{ __('Forgot Your Password?') }}
                </a>
            @endif
        </form>
    </div>
@endsection