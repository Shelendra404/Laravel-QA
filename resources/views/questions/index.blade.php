@extends("layout")
@section("content")

<div id="wrapper">
    <div id="page" class="container">
        <div id="content">
            @foreach ($questions as $question)
            <div class="title">

                <h2> <a href="/questions/{{ $question->id }}">{{ $question->title }} {{ $question->id }}</a></h2>
            </div>

            <p>
                <img src="images/banner.jpg" alt="" class="image image-full" />
            </p>
            {{ $question->excerpt }}

            @endforeach
        </div>

    </div>
</div>

@endsection
