@extends('layouts.app')

@section('content')
<div class="grid-container">
    <div class="grid-x grid-margin-x align-center">
        <div class="medium-10 large-8 cell">
            <div class="card">
                <div class="card-divider">
                    <h4>{{ __('Verify Your Email Address') }}</h4>
                </div>

                <div class="card-section">
                     @if (session('resent'))
                        <div class="callout success">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                     @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},

                    <form method="POST" action="{{ route('verification.resend') }}" data-abide novalidate>
                        @csrf

                        <button type="submit" class="button">{{ __('click here to request another') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
