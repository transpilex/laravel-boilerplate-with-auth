@extends('layouts.base', ['title' => 'Create New Account'])

@section('content')

    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div>
            <label>Name</label>
            <input type="text" name="name" placeholder="Damian D." required>

            @if ($errors->get('name'))
                <ul class="list-unstyled ps-0 mt-1">
                    @foreach ((array) $errors->get('name') as $message)
                        <li class="text-danger mb-1">{{ $message }}</li>
                    @endforeach
                </ul>
            @endif
        </div>

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
            <label>Password</label>
            <input type="password" name="password" placeholder="••••••••" required>

            @if ($errors->get('password'))
                <ul class="list-unstyled ps-0 mt-1">
                    @foreach ((array) $errors->get('password') as $message)
                        <li class="text-danger mb-1">{{ $message }}</li>
                    @endforeach
                </ul>
            @endif
        </div>

        <div>
            <label>Confirm Password</label>
            <input type="password" name="password_confirmation" placeholder="••••••••" required>

            @if ($errors->get('password_confirmation'))
                <ul class="list-unstyled ps-0 mt-1">
                    @foreach ((array) $errors->get('password_confirmation') as $message)
                        <li class="text-danger mb-1">{{ $message }}</li>
                    @endforeach
                </ul>
            @endif
        </div>

        <div>
            <button type="submit">Create Account</button>
        </div>
    </form>

@endsection

@section('scripts')
@endsection
