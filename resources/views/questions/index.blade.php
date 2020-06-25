@extends("layout")
@section("content")

<div id="wrapper">
    <div id="page" class="container">
        <div id="content">
            @foreach ($questions as $question)
            <div class="question-summary">
                <h2> <a href="{{ route("questions.show", $question) }}">{{ $question->title }} </a></h2>
                <div class="excerpt">
                    {{ $question->excerpt }}
                </div>
                <div class="author"></div>
            </div>
            @endforeach
            <div class="pagination">Pagination comes here</div>
        </div>

    </div>
</div>

@endsection
