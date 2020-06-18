@extends("layout")
@section("content")

<div id="wrapper">
    <div id="page" class="container">
        <div id="content">
            <div class="title">
                <h2> {{ $question->title }}</h2>
            </div>
            {{ $question->body }}
        </div>

    </div>
</div>

@endsection
