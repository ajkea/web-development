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
        <div class="row">
            @foreach($auctions as $auction)
            <div class="col-3 col-6-sm auction-small">
                <img src="img/details/related1.png" alt="picture of dance of time">
                <p class="det-descr">{{ $auction->year }}, {{ $auction->origin }}</p>
                <p class="rel name">{{ $auction->name }}</p>
                <p class="rel price">€ {{ $auction->min_price }}</p>
                <div class="inline">
                    <p class="rel countdown">{{ $auction->end_date }}</p>
                    <button class="right button">VISIT AUCTION ></button>
                </div>
            </div>
            @endforeach
        </div>
        <div class="row justify-content-md-center ">
            <div class="pagination">
                <a href="#"><</a>
                <a href="#">1</a>
                <a href="#">2</a>
                <a href="#" class="bold">3</a>
                <a href="#">4</a>
                <a href="#">></a>
            </div>
        </div>
    </div>
@endsection