@extends('layouts.app')

@section('content')
<div class="grid-container">
    <div class="grid-x grid-margin-x align-center">
        <div class="medium-10 large-8 cell">
            <div class="card">
                <div class="card-divider">
                    <h4>{{ __('Reset Password') }}</h4>
                </div>

                <div class="card-section">
                    @if (session('status'))
                       <div class="alert success">
                           {{ session('status') }}
                       </div>
                   @endif

                    <form method="POST" action="{{ route('password.email') }}" data-abide novalidate>
                        @csrf

                        <div class="grid-x grid-margin-x">
                            <div class="medium-4 large-3 cell">
                                <label for="email" class="middle">{{ __('E-Mail Address') }}</label>
                            </div>

                            <div class="medium-8 large-9 cell">
                                <input type="email" id="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus="">

                                @error('email')
                                    <span class="form-error">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="grid-x grid-margin-x">
                            <div class="cell medium-offset-3">
                                <button type="submit" class="button">{{ __('Send Password Reset Link') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

