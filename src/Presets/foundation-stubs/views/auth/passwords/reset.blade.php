@extends('layouts.app')

@section('content')
<div class="grid-container">
    <div class="grid-x grid-margin-x align-center">
        <div class="medium-10 large-8 cell">
            <div class="card">
                <div class="card-divider">
                    <h4>{{ __('Register') }}</h4>
                </div>

                <div class="card-section">
                    <form method="POST" action="{{ route('password.update') }}" data-abide novalidate>
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="grid-x grid-margin-x">
                            <div class="medium-4 large-3 cell">
                                <label for="email" class="middle">{{ __('E-Mail Address') }}</label>
                            </div>

                            <div class="medium-8 large-9 cell">
                                <input type="email" id="email" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus="">

                                @error('email')
                                    <span class="form-error">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="grid-x grid-margin-x">
                            <div class="medium-4 large-3 cell">
                                <label for="middle-label" class="middle">{{ __('Password') }}</label>
                            </div>

                            <div class="medium-8 large-9 cell">
                                <input type="password" id="password" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="form-error">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="grid-x grid-margin-x">
                            <div class="medium-4 large-3 cell">
                                <label for="password-confirm" class="middle">{{ __('Confirm Password') }}</label>
                            </div>

                            <div class="medium-8 large-9 cell">
                                <input type="password" id="password-confirm" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="grid-x grid-margin-x">
                            <div class="cell medium-offset-3">
                                <button type="submit" class="button">{{ __('Reset Password') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

