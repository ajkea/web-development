@extends ('layouts.app')
@section('content')
        <div class="intro-image">
            <img src="{{ URL::to('/') }}/images/static/hero1.png" alt="hero picture 1">
            <div class="container">
                <div class="blue-box col-5 offset-7">
                    <h2>Lorem Ipsum</h2>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. magnis dis parturient montes, nascetur ridiculus mus...</p>
                    <p class="price">Price: € 299.99</p>
                    <button class="wide">VISIT AUCTION  ></button>
                </div>
            </div>
        </div>
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