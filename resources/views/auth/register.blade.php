@extends('layouts.base')

@section('pageTitle')
    <h2>{{ __('Register') }}</h2>
@endsection

@section('content')
    <div class="form-container">
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="form-group">
                <label for="name">{{ __('Name') }}</label>
                <input id="name" type="text" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus
                    placeholder="Enter your name">
                @error('name')
                    <span class="error-label">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="email">{{ __('Email Address') }}</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email"
                    placeholder="Enter your email">
                @error('email')
                    <span class="error-label">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="password">{{ __('Password') }}</label>
                <input id="password" type="password" name="password" required autocomplete="new-password"
                    placeholder="Enter your password">
                @error('password')
                    <span class="error-label">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="password-confirm">{{ __('Confirm Password') }}</label>
                <input id="password-confirm" type="password" name="password_confirmation" required
                    autocomplete="new-password" placeholder="Confirm your password">
            </div>

            <button type="submit" class="lol-accept-btn">
                {{ __('Register') }}
            </button>
        </form>
    </div>
@endsection