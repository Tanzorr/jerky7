@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">You are logged in
                <h1>adminka!</h1>
                <div class="card">

                    <div class="card-body">
                        @if (session('resent'))
                            <div class="alert alert-success" role="alert">
                            </div>
                        @endif

{{--                        {{ __('Before proceeding, please check your email for a verification link.') }}--}}
{{--                        {{ __('If you did not receive the email') }}, <a href="{{ route('verification.resend') }}">{{ __('click here to request another') }}</a>.--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
