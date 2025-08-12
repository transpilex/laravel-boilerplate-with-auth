@extends('layouts.base', ['title' => 'Verify Email'])

@section('css')
@endsection

@section('content')

    <div>
        @if (session('status') == 'verification-link-sent')
            <p>A new verification link has been sent to the email address you provided during registration.</p>
        @endif
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf

            <div>
                <button type="submit">Resend Verification Email</button>
            </div>
        </form>
    </div>

@endsection

@section('scripts')
@endsection
