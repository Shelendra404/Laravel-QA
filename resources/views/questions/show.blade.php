@extends("layout")
@section("content")

<div id="wrapper">
    <div id="page" class="container">
        <div id="content">
            <div class="title">
                <h2> {{ $question->title }}</h2>
            </div>
            {!! $question->body !!}

            <p>
                @foreach ($question->tags as $tag)
                <a href="{{ route('questions.index', ['tag' => $tag->name]) }}">{{ $tag->name }}</a>
                @endforeach
            </p>
        </div>

    </div>
</div>

@endsection
