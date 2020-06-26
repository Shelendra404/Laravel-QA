@extends('layout')

@section('content')
<div id="wrapper">
    <div class="container">
        <h1>Dashboard</h1>
        Welcome, {{ Auth::user()->name }}!
        <div class="content">

            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
            @endif

            <hr />
            <div class="posts">
                <h3>Your posts:</h3>
                @foreach ($questions as $question)
                <div>
                    <a href="{{ $question->path() }}">
                        <h2>{{ $question->title }}</h2>
                    </a>
                    <p>{{ $question->excerpt }}</p>


                    <div class="author">

                        <p>Asked by: <strong>{{ $user->name  }}</strong> at {{ $question->created_at }}
                        </p>

                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
</div>
</div>


@endsection
