@extends('layouts.app')

@section('content')
<div class="grid-container">
    <div class="grid-x grid-margin-x align-center">
        <div class="medium-10 large-8 cell">
            <div class="card">
                <div class="card-divider">
                    <h4>{{ __('Dashboard') }}</h4>
                </div>

                <div class="card-section">
                    @if (session('status'))
                        <div class="alert success">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
