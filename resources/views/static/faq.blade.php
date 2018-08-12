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
                <div class="col-3 faq-question">
                    <a href="#">How to bid?</a>
                    <a href="#">How to sell?</a>
                </div>
                <div class="col-3 faq-question">
                    <a href="#">How to buy?</a>
                    <a href="#">How to register?</a>
                </div>
                <div class="col-3 faq-question">
                    <a href="#">How to ask a question?</a>
                    <a href="#">What is a watchlist?</a>
                </div>
                <div class="col-3 faq-question">
                    <a href="#">How to use a watchlist?</a>
                </div>
            </div>
            <div class="row faq-answer">
                <div class="col-mini">Q</div>
                <div class="col-11">How to bid?</div>
                <div class="col-mini">A</div>
                <div class="col-11">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident</div>
            </div>
            <div class="row faq-answer">
                <div class="col-mini">Q</div>
                <div class="col-11">How to bid?</div>
                <div class="col-mini">A</div>
                <div class="col-11">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident</div>
            </div>
            <div class="row faq-answer">
                <div class="col-mini">Q</div>
                <div class="col-11">How to bid?</div>
                <div class="col-mini">A</div>
                <div class="col-11">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident</div>
            </div>
        </div>
@endsection