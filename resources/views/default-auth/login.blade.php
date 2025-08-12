@extends('layouts.base', ['title' => 'Login'])

@section('content')

    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div>
            <label>Email address</label>
            <input type="email" name="email" value="demo@user.com">

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
            <input type="password" name="password" value="password">

            @if ($errors->get('password'))
                <ul class="list-unstyled ps-0 mt-1">
                    @foreach ((array) $errors->get('password') as $message)
                        <li class="text-danger mb-1">{{ $message }}</li>
                    @endforeach
                </ul>
            @endif
        </div>

        <div>
            <a href="{{ route('password.request') }}">Forgot Password?</a>
        </div>

        <div>
            <button type="submit">Login</button>
        </div>
    </form>

@endsection

@section('scripts')
@endsection
