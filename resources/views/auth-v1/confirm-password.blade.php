@extends('shared.base', ['title' => 'Confirm Password'])

@section('content')

    <form method="POST" action="{{ route('password.confirm') }}">
        @csrf
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
            <button type="submit">Update Password</button>
        </div>
    </form>

@endsection

@section('scripts')
@endsection
