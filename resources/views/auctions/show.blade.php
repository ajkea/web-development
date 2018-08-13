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
            <a href="#" class="breadcrumbs">
                Home > Auctions > Salvador Dali > Dance of Time III
            </a>
            <p class="right">LOT ID: 34611</p>
            </span>
        </div>
        <div class="row">
            <h1>{{ $auction->name }}</h1>
            <p class="countdown">
                25d 14u 44m (7 bids) <img class="icon" src="img/iconMenu.png" alt="icon menu">
            </p>
        </div>
        <div class="row">
            <div class="col-9">
                <div class="row">
                @isset($auction->media)
                    @foreach($auction->media as $media)
                        @if($loop->index == 0)
                        <div class="col-12">
                            <img class="img-lg img-preview__large" src="{{ url('/images/upload/').'/'.$media->source }}" alt="{{ $media->alt }}">
                        </div>
                        @elseif($loop->index < 3 && $media->type == 'optional')
                       <div class="col miniature">
                           <img class="img-preview__small" src="{{ url('/images/upload/').'/'.$media->source }}" alt="{{ $media->alt }}">
                       </div>
                        @endif
                    @endforeach
                @endisset
                </div>
            </div>
            <div class="col-3 right">
                <div class="row det-row">
                    <h3 class="h3">{{ $auction->name }}</h3>
                    <p class="det-descr">{{ $auction->year }}, {{ $auction->origin }}</p>
                </div>
                <div class="row det-row">
                    <p class="countdown">countdown: {{ $auction->end_date }}</p>
                    <p class="date-end">{{ $auction->end_date }}</p>
                </div>
                <div class="row det-row">
                    <p class="bold">{{ $auction->description }}</p>
                    <a href="#" class="bold link">more</a>
                </div>
                <div class="row det-row bottom">
                    <p>Estimated price:</p>
                    <h2 class="price">€ {{ $auction->min_price }} - € {{ $auction->max_price }}</h2>
                    <a href="#" class="det-link"></a>
                    <p class="light">bids: 7</p>
                    <div class="det-bid">
                        <input type="number" name="bid" id="bid"><h4 class="caps">BID NOW ></h4>
                    </div>
                    <a href="#">
                        <i class="fal fa-bars"></i> add to my watchlist
                    </a>
                </div>
            </div> <!-- col-3 right -->
        </div><!-- detail top -->
        <div class="row">
            <div class="col-9 det-description">
                <div class="det-paragraph">
                    <p class="bold">Description</p>
                    <p>{{ $auction->description }}</p>
                </div>
                <div class="det-paragraph">
                    <p class="bold">Condition</p>
                    <p>{{ $auction->condition }}</p>
                </div>
            </div>
            <div class="col-3 right det-properties">
                <p class="bold">Artist</p>
                <p>{{ $auction->origin }}</p>
                <p>{{ $auction->country }}</p>
                <p>1904 - 1989</p>
                <p class="bold">Dimensions</p>
                <p>{{ $auction->width }} x {{ $auction->height }} x {{ $auction->depth }} cm</p>
                <p class="bold">Color</p>
                <p>Bronze, patinated bronze and gold</p>
                <button class="btn btn-question">ASK A QUESTION ABOUT THIS AUCTION</button>
            </div>
        </div><!-- END ROW -->
        <div class="row">
            <h2>Related</h2>
            <div class="col-3 auction-small">
                <img src="img/details/related1.png" alt="picture of dance of time">
                <p class="det-descr">1979, Salvador Dali</p>
                <p class="rel name">{{ $auction->name }}</p>
                <p class="rel price">€ 8.900</p>
                <div class="inline">
                    <p class="rel countdown">25d 14u 44m</p>
                    <a href="#" class="right">VISIT AUCTION ></a>
                </div>
            </div>
            <div class="col-3 auction-small">
                <img src="img/details/related2.png" alt="picture of dance of time">
                <p class="det-descr">1979, Salvador Dali</p>
                <p class="rel name">{{ $auction->name }}</p>
                <p class="rel price">€ 8.900</p>
                <div class="inline">
                    <p class="rel countdown">25d 14u 44m</p>
                    <a href="#" class="right">VISIT AUCTION ></a>
                </div>
            </div>
            <div class="col-3 auction-small">
                <img src="img/details/related1.png" alt="picture of dance of time">
                <p class="list description">1979, Salvador Dali</p>
                <p class="list name">{{ $auction->name }}</p>
                <p class="list price">€ 8.900</p>
                <div class="inline">
                    <p class="list countdown">25d 14u 44m</p>
                    <a href="#" class="right">VISIT AUCTION ></a>
                </div>
            </div>
            <div class="col-3 auction-small">
                <img src="img/details/related1.png" alt="picture of dance of time">
                <p class="list description">1979, Salvador Dali</p>
                <p class="list name">{{ $auction->name }}</p>
                <p class="list price">€ 8.900</p>
                <div class="inline">
                    <p class="list countdown">25d 14u 44m</p>
                    <a href="#" class="right">VISIT AUCTION ></a>
                </div>
            </div>
        </div>
    </div>
@endsection