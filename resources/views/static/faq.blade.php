@extends ('layouts.app')
@section('content')
    @include ('layouts.hero')
    <div class="container">
        <a href="#" class="breadcrumbs">
            Home > Frequently Asked Questions
        </a>
        <div class="row">
            <h1>Find what you're looking for?</h1>
        </div>
        <div class="row faq-questions">
            @foreach($questions as $question)
                <div class="col-6 faq-question">
                    <a href="#question{{ $question->id }}">{{ $question->question }}</a>
                </div>
            @endforeach
        </div>
        @foreach($questions as $question)
            <div id="question{{$question->id}}" class="row faq-answer">
                <div class="col-mini">Q</div>
                <div class="col-11">{{ $question->question }}</div>
                <div class="col-mini">A</div>
                <div class="col-11">{{ $question->answer }}</div>
            </div>
        @endforeach
    </div>
@endsection