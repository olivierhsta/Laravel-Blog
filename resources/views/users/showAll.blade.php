@extends ('layouts.master')

@section('content')
    <ul>
        @foreach ($users as $user)
            <li>
                @include('users.user')
            </li>
        @endforeach
    </ul>

@endsection
