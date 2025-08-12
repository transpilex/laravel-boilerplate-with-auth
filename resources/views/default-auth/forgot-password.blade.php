@extends('layouts.base', ['title' => 'Forgot Password'])

@section('content')

    <form method="POST" action="{{ route('password.email') }}">
        @csrf
        <div>
            <label>Email address</label>
            <input type="email" name="email" placeholder="you@example.com" required>

            @if ($errors->get('email'))
                <ul class="list-unstyled ps-0 mt-1">
                    @foreach ((array) $errors->get('email') as $message)
                        <li class="text-danger mb-1">{{ $message }}</li>
                    @endforeach
                </ul>
            @endif
        </div>

        <div>
            <button type="submit">Send Request</button>
        </div>
    </form>

@endsection

@section('scripts')
@endsection
